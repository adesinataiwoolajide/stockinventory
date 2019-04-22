<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Suppliers, User, Activitylog};
use App\Repositories\SupplierRepository;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SupplierController extends Controller
{
    protected $model;
    public function __construct(Suppliers $supplier)
    {
       // set the model
       $this->model = new SupplierRepository($supplier);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier= $this->model->all();
        return view('administrator.supplier.create')->with([
            'supplier' => $supplier,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->hasPermissionTo('supplier-create')){
            $this->validate($request, [
                'name' =>'required|min:1|max:255',
                'email' =>'required|min:1|max:255|unique:suppliers',
                'phone_one' =>'required|min:1|max:255|unique:suppliers',
                'phone_two' =>'required|min:1|max:255|unique:suppliers',
                'city' =>'required|min:1|max:255',
                'state' =>'required|min:1|max:255',
                'country' =>'required|min:1|max:255',
                'address' =>'required|min:1|max:255',
            ]);
            if(Suppliers::where("email", $request->input("email"))->exists()){
                return redirect()->back()->with("error", $request->input("emil"). 
                " is Already in use by another supplier");

            }elseif(Suppliers::where("phone_one", $request->input("phone_one"))->exists()){
                return redirect()->back()->with("error", $request->input("phone_one"). 
                " Already in use by another supplier");
            }elseif(Suppliers::where("phone_two", $request->input("phone_two"))->exists()){
                return redirect()->back()->with("error", $request->input("phone_two"). 
                " Already in use by another supplier");
            }elseif(User::where("email", $request->input("email"))->exists()){
                return redirect()->back()->with("error", $request->input("email"). 
                " Already in use by another User");

            }else{

                $data = ([
                    "supplier" => new Suppliers,
                    "name" => $request->input("name"),
                    "email" => $request->input("email"),
                    "phone_one" => $request->input("phone_one"),
                    "phone_two" => $request->input("phone_two"),
                    "city" => $request->input("city"),
                    "state" => $request->input("state"),
                    "country" => $request->input("country"),
                    "address" => $request->input("address"), 
                ]);

                $use = new User([
                    "email" => $request->input("email"),
                    "name" => $request->input("name"),
                    "password" => Hash::make($request->input("email")),
                    "role" => 'Supplier',
                    "status" => 1,
                ]);

                $log = new Activitylog([
                    "operations" => "Added ".$request->input("name"). " To The Supplier List",
                    "user_id" => Auth::user()->user_id,
                ]);

                if($log->save() AND ($this->model->create($data)) AND $use->save()){
                    $addRoles = $use->assignRole("Supplier");
                    return redirect()->route("supplier.create")->with("success", "You Have Added " 
                    .$request->input("name"). " To The Supplier List Successfully");
                }
            }
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Create A Supplier",
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($supplier_id)
    {
        if(auth()->user()->hasPermissionTo('supplier-delete')){
            $supplier =  $this->model->show($supplier_id); 
            $details= $supplier->supplier_name; 
            $email = $details->email ;
            $user = User::where([
                "email" => $email, 
            ])->first();
            $user_id = $user->user_id;
            $log = new Activitylog([
                "operations" => "Deleted ". $details. " From The Supplier List",
                "user_id" => Auth::user()->id,
            ]);
            if (($supplier->delete($supplier_id)) AND ($supplier->trashed()) AND($user->delete()) AND ($user->trach()) AND ($log->save())) {
                return redirect()->back()->with([
                    'success' => "You Have Deleted". $details. " ". "From The Supplier Details Successfully",
                ]);
            }
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Delete A Supplier",
            ]);
        }
    }
}

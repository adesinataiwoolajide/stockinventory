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
            $role= 'Supplier';

            $use = new User([
                "email" => $request->input("email"),
                "name" => $request->input("name"),
                "password" => Hash::make($request->input("email")),
                "role" => $role,
                "status" => 0,
                "registration_number" => rand(0001, 1000),
            ]);

            $log = new Activitylog([
                "operations" => "Added ".$request->input("name"). " To The Supplier List",
                "user_id" => Auth::user()->user_id,
            ]);

            if($log->save() AND ($this->model->create($data)) AND $use->save()){
                return redirect()->route("supplier.create")->with("success", "You Have Added " 
                .$request->input("name"). " To The Supplier List Successfully");
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
    public function destroy($id)
    {
        //
    }
}

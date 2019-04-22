<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Distributors, User, Activitylog};
use App\Repositories\DistributorRepository;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DistributorController extends Controller
{
    protected $model;
    public function __construct(Distributors $distributor)
    {
       // set the model
       $this->model = new DistributorRepository($distributor);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributor= $this->model->all();
        return view('administrator.distributors.create')->with([
            'distributor' => $distributor,
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
        if(auth()->user()->hasPermissionTo('distributor-create')){
           $this->validate($request, [
                'name' =>'required|min:1|max:255',
                // 'email' =>'required|min:1|max:255|unique:distributors',
                'phone_one' =>'required|min:1|max:255|unique:distributors',
                'phone_two' =>'required|min:1|max:255|unique:distributors',
                'address' =>'required|min:1|max:255',
                'credit_limit' =>'required|min:1|max:255',
                'credit_reduction_per_month' =>'required|min:1|max:255',
                
            ]);
            if(Distributors::where("phone_one", $request->input("phone_one"))->exists()){
                return redirect()->back()->with("error", $request->input("phone_one"). 
                " Already in use by another Distributor");
            }elseif(Distributors::where("phone_two", $request->input("phone_two"))->exists()){
                return redirect()->back()->with("error", $request->input("phone_two"). 
                " Already in use by another Distributor");
            
            }else{
                $data = ([
                    "distributor" => new Distributors,
                    "name" => $request->input("name"),
                    "phone_one" => $request->input("phone_one"),
                    "phone_two" => $request->input("phone_two"),
                    "email" => $request->input("email"),
                    "address" => $request->input("address"),
                    "credit_limit" => $request->input("credit_limit"),
                    "credit_reduction_per_month" => $request->input("credit_reduction_per_month"),
                ]);
                
                $use = new User([
                    "email" => $request->input("email"),
                    "name" => $request->input("name"),
                    "password" => Hash::make($request->input("email")),
                    "role" => 'Distributor',
                    "status" => 1,
                    // "registration_number" => rand(0002, 2000),
                ]);

                $log = new Activitylog([
                    "operations" => "Added ".$request->input("name"). " To The Distributor List",
                    "user_id" => Auth::user()->user_id,
                ]);

                if($this->model->create($data) AND ($log->save()) AND ($use->save())){
                    $addRoles = $use->assignRole("Distributor");
                    return redirect()->route("distributor.create")->with("success", "You Have Added " 
                    .$request->input("name"). " To The Distributor List Successfully");
                }
            }
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Create A Distributor",
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
    public function destroy($distributor_id)
    {
        $distributor =  $this->model->show($distributor_id); 
        $details = Distributors::where([
            "distributor_id" => $distributor_id, 
        ])->first();
        //$details= $distributor->distributor_name;  
        $log = new Activitylog([
            "operations" => "Deleted ". " ". $details->name. " ". " From The Distributors List",
            "user_id" => Auth::user()->id,
        ]);
        if (($distributor->delete($distributor_id)) AND ($distributor->trashed())) {
            return redirect()->back()->with([
                'success' => "You Have Deleted ". " ". $details->name. " ". "From The Distributor Details Successfully",
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Employee, User, Activitylog};
use App\Repositories\EmployeeRepository;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
{
    protected $model;

    public function __construct(Employee $employee)
    {
       // set the model
       $this->model = new EmployeeRepository($employee);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = $this->model->all();
        return view('administrator.employee.create')->with([
            "employee" => $employee,
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
        if(auth()->user()->hasPermissionTo('employee-create')){
            $this->validate($request, [
                'full_name' =>'required|min:1|max:255',
                'phone_number' => 'required|min:1|max:255|unique:employees',
                'address' =>'required|min:1|max:255',
                'contract_type' =>'required|min:1|max:255',
            ]);
            if(Employee::where('phone_number', $request->input('phone_number'))->exists()){
                return redirect()->back()->with("error", $request->input("phone_number"). 
                " Already in use by another Employee");
            }
            $data = ([
                "employee" => new Employee,
                "full_name" => $request->input("full_name"),
                "phone_number" => $request->input("phone_number"),
                "address" => $request->input("address"),
                "contract_type" => $request->input("contract_type"),
                
            ]);

            $log = new Activitylog([
                "operations" => "Added ".$request->input("full_name"). " To The Employee List",
                "user_id" => Auth::user()->user_id,
            ]);

            if($log->save() AND ($this->model->create($data))){
                return redirect()->route("employee.create")->with("success", "You Have Added " 
                .$request->input("full_name"). " To The Employee List Successfully");
            }
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Create An Employee",
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
    public function destroy($employee_id)
    {
        $employee =  $this->model->show($employee_id); 
        $details= $employee->full_name;  
        $log = new Activitylog([
            "operations" => "Deleted ". $details. " From The employee List",
            "user_id" => Auth::user()->id,
        ]);
        if (($employee->delete($employee_id))AND ($employee->trashed())) {
            return redirect()->back()->with([
                'success' => "You Have Deleted ". " ". $details. " ". "From The Employee Details Successfully",
            ]);
        }
    }
}

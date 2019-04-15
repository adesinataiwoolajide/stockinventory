<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{WareHouseManagement, User, Activitylog};
use App\Repositories\WareHouseRepository;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WareHouseManagementController extends Controller
{
    protected $model;
    public function __construct(WareHouseManagement $distributor)
    {
       // set the model
       $this->model = new WareHouseRepository($distributor);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouse= $this->model->all();
        $user = User::all();
        return view('administrator.warehouse.create')->with([
            'warehouse' => $warehouse,
            "user" => $user, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->hasPermissionTo('warehouse-create')){
            $this->validate($request, [
                'name' =>'required|min:1|max:255|unique:ware_house_managements',
                'address' =>'required|min:1|max:255',
                'city' =>'required|min:1|max:255',
                'state' =>'required|min:1|max:255',
                'country' =>'required|min:1|max:255',
                'start_date' => 'required|min:1|max:255',
                'user_id' =>'required|min:1|max:255',
            ]);
            $data = ([
                "warehouse" => new WareHouseManagement,
                "name" => $request->input("name"),
                "address" => $request->input("address"), 
                "city" => $request->input("city"),
                "state" => $request->input("state"),
                "country" => $request->input("country"),
                "start_date" => $request->input("start_date"),
                "user_id" => $request->input("user_id"),

            ]);
            $check = WareHouseManagement::where([
                "name" => $request->input('name'), 
                "user_id" => $request->input('user_id'),
            ])->get();

            if(count($check)>0){
                return redirect()->back()->with([
                    'error' => "You Have Added This User to This Ware House Before before",
                ]);
            }else{

                $log = new Activitylog([
                    "operations" => "Added ".$request->input("name"). " To The Ware House List",
                    "user_id" => Auth::user()->user_id,
                ]);

                if($log->save() AND ($this->model->create($data))){
                    return redirect()->route("warehouse.create")->with("success", "You Have Added " 
                    .$request->input("name"). " To The Ware House List Successfully");
                }
            }
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Create A Ware House",
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

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Outlets, User, Activitylog};
use App\Repositories\OutletRepository;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OutletController extends Controller
{
    protected $model;
    public function __construct(Outlets $outlet)
    {
       // set the model
       $this->model = new OutletRepository($outlet);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outlet= $this->model->all();
        return view('administrator.outlets.create')->with([
            'outlet' => $outlet,
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
        if(auth()->user()->hasPermissionTo('outlet-create')){
            $this->validate($request, [
                'outlet_name' =>'required|min:1|max:255|unique:outlets',
            ]);
            $data = ([
                "outlet" => new Outlets,
                "outlet_name" => $request->input("outlet_name"),
            ]);

            $log = new Activitylog([
                "operations" => "Added ".$request->input("outlet_name"). " To The Outlet List",
                "user_id" => Auth::user()->user_id,
            ]);

            if($log->save() AND ($this->model->create($data))){
                return redirect()->route("outlet.create")->with("success", "You Have Added " 
                .$request->input("outlet_name"). " To The Outlet List Successfully");
            }
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Create Outlets",
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

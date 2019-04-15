<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Categories, User, Activitylog};
use App\Repositories\CategoryRepository;
use DB;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    protected $model;
    public function __construct(Categories $category)
    {
       // set the model
       $this->model = new CategoryRepository($category);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= $this->model->all();
        return view('administrator.categories.create')->with([
            'category' => $category,
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
        if(auth()->user()->hasPermissionTo('category-create')){
            $this->validate($request, [
                'category_name' =>'required|min:1|max:255|unique:categories',
            ]);
            $data = ([
                "category" => new Categories,
                "category_name" => $request->input("category_name"),
                "user_id" => Auth::user()->user_id,  
            ]);

            $log = new Activitylog([
                "operations" => "Added ".$request->input("category_name"). " To The Category List",
                "user_id" => Auth::user()->user_id,
            ]);

            if($log->save() AND ($this->model->create($data))){
                return redirect()->route("category.create")->with("success", "You Have Added " 
                .$request->input("category_name"). " To The Category List Successfully");
            }
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Create Product Category",
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

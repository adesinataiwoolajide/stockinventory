<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ProductVariants, Categories, User, Activitylog};
use App\Repositories\VariantRepository;
use DB;
use Illuminate\Support\Facades\Auth;
class ProductVariantController extends Controller
{
    protected $model;
    public function __construct(ProductVariants $variant)
    {
       // set the model
       $this->model = new VariantRepository($variant);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Categories::all();
        $variant = $this->model->all();
        return view('administrator.variants.create')->with([
            'category' => $category,
            "variant" => $variant,
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
        if(auth()->user()->hasPermissionTo('variant-create')){
            $this->validate($request, [
                'category_id' =>'required|min:1|max:255',
                'variant_name' =>'required|min:1|max:255',
                'variant_size' =>'required|min:1|max:255',
            ]);
            $data = ([
                "variant" => new ProductVariants,
                "category_id" => $request->input("category_id"),
                "variant_name" => $request->input("variant_name"),
                "variant_size" => $request->input("variant_size"),
            ]);

            $details = DB::table('categories')->where([
                "category_id" => $request->input('category_id')
            ])->first();
            $category_name = $details->category_name;
            
            $check = ProductVariants::where([
                "variant_name" => $request->input('variant_name'), 
                "variant_size" => $request->input('variant_size'),
                "category_id" => $request->input('category_id'),
            ])->get();
            
            if(count($check)>0){
                return redirect()->back()->with([
                    
                    'error' => "You Have Added". $request->input('variant_name').   
                    "with Size ".$request->input('variant_size'). "To $category_name " . " Category before",
                ]);
            }else{
                
                $log = new Activitylog([
                    "operations" => "You Have Added". $request->input('variant_name').   
                    "with Size ".$request->input('variant_size'). "To " .$category_name,
                    "user_id" => Auth::user()->user_id,
                ]);

                if($log->save() AND ($this->model->create($data))){
                    return redirect()->route("variant.create")->with("success", "You Have The Variant ". $request->input('variant_name'). "To
                    ". $category_name.
                    " Successfully");
                }
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

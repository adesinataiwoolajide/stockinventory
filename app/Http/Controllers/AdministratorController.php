<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\{Categories, User, Activitylog, AssignOutlet, Distributors, Suppliers, Employee,InventoryStock, Order, Outlets, Products, 
    ProductVariants, Sales, WareHouseManagement};


class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        $user = User::all();
        $log = Activitylog::all(); 
        $assign = AssignOutlet::all();
        $distributor = Distributors::all();
        $supplier = Suppliers::all();
        $employee = Employee::all();
        $inventory = InventoryStock::all();
        $order = Order::all(); 
        $outlet = Outlets::all();
        $product = Products::all();
        $variant = ProductVariants::all();
        $sales = Sales::all();
        $warehouse = WareHouseManagement::all();


        

        // Permission::create([
        //     'name'=>'salary-edit',
        //     'guard_name' => 'web'
        // ]);
        // auth()->user()->givePermissionTo([
        //     'product-create', 'product-edit','product-list', 'product-delete',
        //     'category-create', 'category-edit', 'category-delete', 'category-update',
        //     'variant-create', 'variant-delete', 'variant-update',
        //     'distributor-create', 'distributor-edit', 'distributor-update', 'distributor-delete',
        //     'supplier-create', 'supplier-edit', 'supplier-update', 'supplier-delete',
        //     'outlet-create', 'outlet-edit', 'outlet-update', 'outlet-delete',
        //     'warehouse-create', 'warehouse-edit', 'warehouse-delete', 'warehouse-update',

        //     'employee-create', 'employee-delete', 'employee-update', 'employee-edit',
        //     'user-create', 'user-delete', 'user-update', 'user-edit',
        //     'salary-create', 'salary-delete', 'salary-update', 'salary-edit',
        //     // 'account-create', 'account-delete', 'account-update', 'account-edit',

        // ]);


        return view("administrator.dashboard")->with([
            'categories' => $categories,
            'user' => $user,
            'log' => $log,
            'assign' => $assign,
            'distributor' => $distributor,
            'supplier' => $supplier,
            'employee' => $employee,
            'inventory' => $inventory,
            'order' => $order,
            'outlet' => $outlet,
            'product' => $product,
            'variant' => $variant,
            'sales' => $sales,
            'warehouse' => $warehouse,
        ]);
        //Creating Roles
        // Role::create([
        //     'name'=>'Accountant',
        //     'guard_name' => 'web'
        // ]);

        //Creating Permission
        

         // return auth()->user()->getAllPermissions();
        // return User::role('Administrator')->get();
       // return auth()->user()->assignRole('Administrator');
        //return $role = Role::where('name', 'Administrator')->first();

        // Granting Permission
        // $role = Role::where('name', 'Administrator')->first();
        // $permission = Permission::where('name', 'product-create')->first();

        // $permission = Permission::where('name', 'All Pages')->first();
        // $role = Role::where('name', 'Administrator')->first();
        // $permission->removeRole($role);

        //model has permission
        // auth()->user()->givePermissionTo('category-create');

        // model has role
        //auth()->user()->assignRole('Administrator');

        //checking User Permission

        //return auth()->user()->getAllPermissions();

        //return User::role('Administrator')->get();
        //return User::permission('category-create')->get();

        //giving multiple permission
        // auth()->user()->givePermissionTo([
        //     // 'product-edit','product-list', 'product-delete',
        //     // 'category-edit', 'category-delete', 'category-update',
        //     // 'variant-create', 'variant-delete', 'variant-update',
        //     // 'distributor-create', 'distributor-edit', 'distributor-update', 'distributor-delete',
        //     // 'supplier-create', 'supplier-edit', 'supplier-update', 'supplier-delete',
        //     // 'outlet-create', 'outlet-edit', 'outlet-update', 'outlet-delete',
        //     // 'warehouse-create', 'warehouse-edit', 'warehouse-delete', 'warehouse-update',

        //     'employee-create', 'employee-delete', 'employee-update', 'employee-edit',
        //     'user-create', 'user-delete', 'user-update', 'user-edit',
        //     'salary-create', 'salary-delete', 'salary-update', 'salary-edit',
        //     'account-create', 'account-delete', 'account-update', 'account-edit',

        // ]);

    }

    public function userlogin(Request $request)
    {
        $data = [
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        ];
        if(Auth::attempt($data)){
            // auth()->user()->assignRole('Administrator');
            $usertype = Auth::user()->role;
            if(!empty($usertype)){
                $message = array();
                if(auth()->user()->hasRole('Administrator')){
                    $message = "Welcome to Super Administrator Dashboard";
                }elseif(auth()->user()->hasRole('Admin')){
                    $message = "Welcome to Administrator Dashboard";
                }elseif(auth()->user()->hasRole('Editor')){
                    $message = "Welcome to Editor Dashboard";
                }elseif(auth()->user()->hasRole('Accountant')){
                    $message = "Welcome to Accountant Dashboard";
                }elseif(auth()->user()->hasRole('Receptionist')){
                    $message = "Welcome to Receptionist Dashboard";
                }else{
                    $request->session()->flash('Welcome to Dashboard');
                }
                return redirect()->route("administrator.dashboard")->with([
                    'message' => $message,
                ]);
            }else{
               
                return redirect()->back()->with([
                    "error" => "Ooops!!! Invalid User Name or Password",
                ]);
            }

        }else{
            
            return redirect()->back()->with([
                "error" => "Ooops!! Your Account Does Not Exist",
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return view("auth.login");
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
        //
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Creating Roles
        // Role::create([
        //     'name'=>'Accountant',
        //     'guard_name' => 'web'
        // ]);

        //Creating Permission
        // Permission::create([
        //     'name'=>'warehouse-delete',
        //     'guard_name' => 'web'
        // ]);

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

       // return auth()->user()->getAllPermissions();

        //return User::role('Administrator')->get();
        //return User::permission('category-create')->get();

        //giving multiple permission
        auth()->user()->givePermissionTo([
            // 'product-edit','product-list', 'product-delete',
            // 'category-edit', 'category-delete', 'category-update',
            // 'variant-create', 'variant-delete', 'variant-update',
            // 'distributor-create', 'distributor-edit', 'distributor-update', 'distributor-delete',
            // 'supplier-create', 'supplier-edit', 'supplier-update', 'supplier-delete',
            // 'outlet-create', 'outlet-edit', 'outlet-update', 'outlet-delete',

            'warehouse-create', 'warehouse-edit', 'warehouse-delete', 'warehouse-update',

        ]);


        return view("administrator.dashboard");
    }

    public function userlogin(Request $request)
    {
        $data = [
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        ];
        if(Auth::attempt($data)){
            $usertype = Auth::user()->role;
            if($usertype == "Administrator"){
                $request->session()->flash('success', 'Login successfully');
                return redirect()->route("administrator.dashboard");
            }else{
                $message = "Ooops!!! Invalid User Name or Password" ;
                return redirect()->back()->with("error", $message);
            }
        }else{
            $message = "Ooops!! Your Account Does Not Exist" ;
            return redirect()->back()->with("error", $message);
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

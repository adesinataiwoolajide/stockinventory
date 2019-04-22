<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{User, Activitylog};
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepository;


class UserController extends Controller
{
    protected $model;
    public function __construct(User $user)
    {
       // set the model
       $this->model = new UserRepository($user);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =$this->model->all();
        $user_roles = Role::all();
        return view('administrator.users.create')->with([
            'user' => $user,
            'user_roles' => $user_roles,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $roles = Role::pluck('name','name')->all();
        // return view('users.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->hasPermissionTo('user-create')){
            $this->validate($request, [
                'name' => 'required|min:1|max:255|',
                'email' => 'required||min:1|max:255|unique:users',
                'password' => 'required|min:1|max:255',
                'role' => 'required|min:1|max:255'
            ]);
            
            if(User::where("email", $request->input("email"))->exists()){
                return redirect()->back()->with("error", "The E-Mail is In Use By Another User");
            }
            $user =new User([
                "email" => $request->input("email"),
                "name" => $request->input("name"),
                "password" => Hash::make($request->input("password")),
                "role" => $request->input("role"),
                "status" => 1,
            ]);

            $log = new Activitylog([
                "operations" => "Added ".$request->input("email"). " To The User List",
                "user_id" => Auth::user()->user_id,
            ]);

            if(($log->save()) AND ($this->model->create($user))){
                $addRoles = $user->assignRole($request->input('roles'));
                return redirect()->route("user.create")->with("success", "You Have Added User " 
                .$request->input("email"). " The User List Successfully");
            }else{
            return redirect()->back()->with("error", "Network Failure");
            } 
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Create A User",
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
        $user = User::find($id);
        return view('users.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('users.edit',compact('user','roles','userRole'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }


        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        if(auth()->user()->hasPermissionTo('user-delete')){
            $user =  Branch::find($user_id);; 
            $details= $user->name; 
            $email = $details->email;
            $user = User::where([
                "email" => $email, 
            ])->first();
            $user_id = $user->user_id;

            $log = new Activitylog([
                "operations" => "Deleted ". $details. " From The User List",
                "user_id" => Auth::user()->id,
            ]);
            if (($user->delete($user_id)) AND ($user->trashed()) AND ($log->save())) {
                return redirect()->back()->with([
                    'success' => "You Have Deleted". $details. " ". "From The User Details Successfully",
                ]);
            }
        } else{
            return redirect()->back()->with([
                'error' => "You Dont have Access To Delete A User",
            ]);
        }
    }
}

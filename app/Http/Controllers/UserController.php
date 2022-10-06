<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Apply;
use App\Models\User;
use App\Models\Assignment;
use App\Models\AssignmentUser;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\Assign;
use RealRashid\SweetAlert\Facades\Alert;
use Freshwork\ChileanBundle\Rut;


class UserController extends Controller
{
     
  
    public function index(Request $request)
    {
        $users = User::orderBy('created_at','DESC')->get();
        $roles = Role::pluck('name')->all();
        return view('admin.users.index',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name')->all();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
            'rut_form'   => 'required|cl_rut'
        ]);

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success','User created successfully');
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
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('admin.users.show',compact('user','roles','userRole'));
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

        return view('admin.users.edit',compact('user','roles','userRole'));
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
            /* 'password' => 'same:confirm-password', */
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['confirm-password'])){
            $input['password'] = Hash::make($input['confirm-password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $success = $user->assignRole($request->input('roles'));

        if($success){
            toast('¡Usuario actualizado correctamente!','success');
        }else{
            toast('Ha ocurrido un problema, inténtelo nuevamente','danger');
        }

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $mensaje =  $user->delete();
        if($mensaje)
         {
             toast('Usuario eliminado','success');
             
         }else{
             toast('Usuario no eliminado','warning');
         }
         return redirect()->route('users.index');

        
    }

}

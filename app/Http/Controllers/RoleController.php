<?php

namespace App\Http\Controllers;

use App\Role;
use App\user;
use App\model_has_roles;
use App\model_has_permissions;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


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
        //assignRole

        $input = $request->all();
        $user = User::where('id', $input['user_id'])->get();
        $role_id = $input['role'];
        $role = model_has_roles::where('model_id',  $input['user_id'])->delete();
        model_has_roles::create(['role_id'=>$role_id, 'model_type'=>'App\User', 'model_id'=>$input['user_id']]);

        // assignPermission
        $role_has_permission = DB::table('role_has_permissions')->where('role_id', $input['role'])->pluck('permission_id')->all();
        $permission = DB::table('permissions')->pluck('name', 'id')->all();
        model_has_permissions::where('model_id', $input['user_id'])->delete();
        //changeRole_idInUserTable
        $user = User::findOrFail($input['user_id']);
        if($user)
        {
          $user->role_id = $role_id;
          $user->save();
        }
        foreach($role_has_permission as $s)
        {
          model_has_permissions::create(['permission_id'=>$s, 'model_type'=>'App\User', 'model_id'=>$input['user_id']]);
        }


      return view('home');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }
    public function addRole($id)
    {
        $roles = DB::table('roles')->pluck('name', 'id')->all();
        $user_id = $id;

        return view('admin.role.index', ['roles'=>$roles, 'user_id'=>$id]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}

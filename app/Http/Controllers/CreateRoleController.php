<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_has_roles;
use App\role_has_permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CreateRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $roles = DB::table('roles')->get();

        $permissions = DB::table('permissions')->pluck('name', 'id')->all();



        return view('admin.role_and_permission.index', ['roles'=>$roles, 'permissions'=>$permissions]);
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
        $input = $request->input();

        $roles = Role::create(['name' => $input['role']]);

        foreach($input['permission'] as $a)
        {
          $permission = Permission::where('id', $a)->pluck('id', 'id')->all();
          $role = Role::findOrFail($roles->id);
          $role->givePermissionTo($permission);

        }

      return view('home');
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
        $roles = Role::findOrFail($id);

        return view('admin.role_and_permission.edit', ['roles'=>$roles]);
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
        $input = $request->all();
        // //
        $role_delete = Role::findOrFail($id);
        $role_delete->delete();
        $roles = Role::create(['name' => $input['role']]);
        $old_permission = role_has_permission::where('role_id', $id)->delete();

        foreach($input['permission'] as $a)
        {
          $permission = Permission::where('id', $a)->pluck('id', 'id')->all();
          $role_has_permission = Role::findOrFail($roles->id);
          $role_has_permission->givePermissionTo($permission);

        }

      return redirect('/admin/create_role');

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
       Role::findOrFail($id)->delete();
       model_has_roles::where('role_id', $id)->delete();
       role_has_permission::where('role_id', $id)->delete();


       return view('home');
    }
}

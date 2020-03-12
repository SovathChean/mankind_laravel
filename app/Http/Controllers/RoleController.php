<?php

namespace App\Http\Controllers;

use App\Role;
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
        $user = Auth::user();
        $input = $request->all();
        $modelRole = DB::table('model_has_roles')->where('model_id', Auth::id())->value('role_id');
        $role = DB::table('roles')->where('id', $modelRole)->value('name');
        $user->removeRole($role);
        $user->assignRole($input['role']);
        //assignPermission
        $role_has_permission = DB::table('role_has_permissions')->where('role_id', $input['role'])->pluck('permission_id')->all();
        $modelP = DB::table('model_has_permissions')->where('model_id', Auth::id())->pluck('permission_id')->all();
        $permission = DB::table('permissions')->pluck('name', 'id')->all();
        foreach($modelP as $si)
        {
          $user->revokePermissionTo([$permission[$si]]);
        }
        foreach($role_has_permission as $s)
        {
           $user->givePermissionTo([$permission[$s]]);
        }

        //$user->givePermissionTo([])

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

<?php

namespace App\Http\Controllers;

use App\User;
use App\model_has_roles;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $auth = Auth::id();
        // $users = DB::table('users')->get();
        // $roles = DB::table('roles')->pluck('name', 'id')->all();
        // $roleModels = DB::table('model_has_roles')->pluck('role_id', 'model_id')->all();
        // $lastModel  = model_has_roles::max('model_id');
        //
        // return view('admin.users.index', ['users'=> $users, 'roles'=> $roles, 'auth'=>$auth, 'roleModels'=>$roleModels, 'lastModel'=>$lastModel]);
    //
    return view('admin.users.index');

  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = DB::table('roles')->pluck('name', 'id')->all();

        return view('admin.users.create', ['roles'=>$roles]);
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
        $input = $request->all();
        $password = bcrypt($input['password']);
        User::create(['name'=>$input['name'], 'email'=>$input['email'], 'password'=>$password]);


        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $user = User::findOrFail($user->id);

        return view('admin.users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $input = $request->all();
        $password = bcrypt($input['password']);
        $user = User::findOrFail($user->id);
        $user->update(['name'=>$input['name'], 'email'=>$input['email'], 'password'=>$password]);

        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user = User::findOrFail($user->id);
        $user->delete();

        return view('home');
    }
    public function datatable()
    {
        return Datatables::of(User::query())->make(true);
    }
}

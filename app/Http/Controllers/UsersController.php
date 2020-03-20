<?php

namespace App\Http\Controllers;

use App\User;
use App\Department;
use App\Photo;
use App\model_has_roles;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use App\DataTables\UserDataTable;
use App\DataTables\UserDataTableEditor;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $departments = DB::table('departments')->pluck('name', 'id')->all();
        return view('admin.users.create', ['roles'=>$roles, 'departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        $validated = $request->validated();
        $input = $request->all();
        $password = bcrypt($input['password']);

        User::create([
        'name'=>$input['name'],
        'email'=>$input['email'],
        'password'=> $password,
        'description'=>$input['description'],
        'department_id'=>$input['department_id'],
        'role_id'=>$input['role_id'],
        'facebook_url'=>$input['facebook_url'],
        'insta_url'=>$input['insta_url']
       ]);

        if($request->hasFile('photo')) {
            //get filename with extension
            $filenamewithextension = $request->file('photo')->getClientOriginalName();
            //
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('photo')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('photo')->storeAs('public/uploads', $filenametostore);

            $user = DB::table('users')->where('name', $input['name'])->value('id');
            // //storeUrl
            Photo::create(['url'=>$filenametostore, 'user_id'=>$user]);

          }

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
    public function update(UserRequest $request, User $user)
    {
        //
        $input = $request->all();
        $validated = $request->validated();
        $password = bcrypt($input['password']);
        $user = User::findOrFail($user->id);
        $user->update([
        'name'=>$input['name'],
        'email'=>$input['email'],
        'password'=> $password,
        'description'=>$input['description'],
        'department_id'=>$input['department_id'],
        'role_id'=>$input['role_id'],
        'facebook_url'=>$input['facebook_url'],
        'insta_url'=>$input['insta_url']
       ]);

        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/admin/user');

    }
    public function datatable()
    {
        return Datatables::of(User::query())
        ->addColumn('role', function(User $user) {
                   if(!is_null($user->role_id))
                    {
                      return $user->role->name;}
                    else {
                      return 'Not yet';
                    }
                })
        ->addColumn('update', function(User $user){
              $update =  '<a href="/admin/user/'.$user->id.'/edit" class="btn btn-primary btn-sm">Update</a>';

                 return $update;
        })
        ->addColumn('action', function(User $user){
          $action = <<<HTML
                     <form action="/admin/user/delete/$user->id" method="get">
                      <input type="submit" class="btn btn-danger btn-sm" value="delete">
                    </form>

                    HTML;
             return $action;
        })
        ->addColumn('select_role', function(User $user){
          $roles = Role::all();

          $select = <<<HTML
                      <a href="/admin/add_role/add/$user->id" class="btn btn-secondary btn-sm">Add Role </a>
                     HTML;

          return $select;
        })
        ->rawColumns(['update', 'action', 'select_role'])

        ->make(true);
    }


}

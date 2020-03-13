@extends('home')
<style media="screen">
  .user{
  margin-bottom: 20px;
  }
</style>
@section('contents')
 <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="iq-card-header d-flex justify-content-between">
           <div class="iq-header-title">
              <h4 class="card-title">Blogs Datatables</h4>
           </div>
        </div>
        <div class="iq-card-body">
          @role('Admin')
          <button class="btn btn-success user" ><a href="{{route('user.create')}}"> Create New User </a> </button>
          @endrole
            <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-bordered" >
                    <thead>
                      <tr>
                      <th>id</th>
                      <th>name</th>
                      <th>email</th>
                      <th>created_at</th>
                      <th>role</th>
                      @role('Admin')
                      <th>Assigned role</th>
                      @endrole
                      @role('doctor|Admin')
                      <th></th>
                      <th></th>
                      @endrole
                    </tr>
                    </thead>
                    <tbody>
                       @foreach($users as $user)

                        <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->created_at}}</td>
                          @if($user->id <= $lastModel)
                          <td>{{$roles[$roleModels[$user->id]]}}</td>
                          @else
                          <td>non</td>
                          @endif


                          @role('Admin')
                          <td>
                            {!! Form::open(['method'=>'POST', 'action'=>['RoleController@store']]) !!}

                              <div class="form-group">
                                 {!! Form::select('role', [''=>'choose role'] + $roles, null, ['class'=>'form-control', 'onchange'=>'this.form.submit()', 'value'=> '$roles->id']) !!}
                                 <input type="hidden" name="user_id" value="{{$user->id}}">
                              </div>
                              <noscript><input type="submit" value="Submit"></noscript>

                            {!! Form::close() !!}

                        </td>
                        @endrole

                        @can('edit post')
                          <td>

                              {!! Form::open(['method'=>'GET', 'action'=>['UsersController@edit', $user->id] ]) !!}
                              <div class="form-group">
                                {!! Form::submit('update', ['class'=>'btn btn-primary']) !!}
                              </div>
                              {!! Form::close() !!}

                          </td>
                            @endcan
                            @can('delete post')
                          <td>

                              {!! Form::open(['method'=>'delete', 'action'=>['UsersController@destroy', $user->id] ]) !!}
                              <div class="form-group">
                                {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                              </div>
                              {!! Form::close() !!}

                          </td>
                        @endcan
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
      </div>
    </div>
 </div>
@endsection

@extends('home')

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
            <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-bordered" >
                    <thead>
                      <tr>
                      <th>id</th>
                      <th>name</th>
                      <th>email</th>
                      <th>created_at</th>
                      <th>Add role</th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->created_at}}</td>
                          <td>
                            <div class="form-group">
                              <button href="" class="btn btn-success">Add role</button>
                            </div>
                        </td>
                          <td>
                              {!! Form::open(['method'=>'GET', 'action'=>['UsersController@edit', $user->id] ]) !!}
                              <div class="form-group">
                                {!! Form::submit('update', ['class'=>'btn btn-primary']) !!}
                              </div>
                              {!! Form::close() !!}
                          </td>
                          <td>
                              {!! Form::open(['method'=>'delete', 'action'=>['UsersController@destroy', $user->id] ]) !!}
                              <div class="form-group">
                                {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                              </div>
                              {!! Form::close() !!}
                          </td>
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

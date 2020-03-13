@extends('home')

@section('contents')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
             <div class="iq-header-title">
                <h4 class="card-title">Create New User</h4>
             </div>
          </div>
          <div class="iq-card-body">
               {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UsersController@update', $user->id]]) !!}
                    <div class="form-group">
                     {!! Form::label('name', 'Username') !!}
                     {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                         {!! Form::label('email', 'email') !!}
                         {!! Form::email('email', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                          {!! Form::label('password', 'password') !!}
                         {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>
                    {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

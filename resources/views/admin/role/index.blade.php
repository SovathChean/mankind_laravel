@extends('home')

@section('contents')
   {!! Form::open(['method'=>'post', 'action'=>'RoleController@store']) !!}
    <div class="form-group">
      {!! Form::select('role', [''=>'choose role'] + $roles, null, ['class'=>'form-control', 'value'=> '$roles->id']) !!}
      <input type="hidden" name="user_id" value="{{$user_id}}">
    </div>
    {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
   {!! Form::close() !!}
@endsection

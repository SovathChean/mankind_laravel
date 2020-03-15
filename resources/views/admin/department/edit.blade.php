@extends('showing')

     @section('heading')
       <h4 class="card-title">Update Department Of Doctor</h4>
     @endsection
     @section('table')
       {!! Form::model($blogs, ['method'=>'PATCH', 'action'=>['DepartmentController@update', $blogs->id]]) !!}
       <div class="form-group">
         {!! Form::text('name', null, ['class'=>'form-control']) !!}
       </div>
       {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
       {!! Form::close() !!}
     @endsection

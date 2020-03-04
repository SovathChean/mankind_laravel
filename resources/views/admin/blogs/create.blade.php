@extends('home')

@section('content')
    {!! Form::open(['method' => 'post', 'action' => 'BlogsController@store']) !!}
          {!! Form::text('user', null,  ['class' => 'form-control']) !!}
    {!! Form::close() !!}

@endsection

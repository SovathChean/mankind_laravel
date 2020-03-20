@extends('home')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@section('contents')

{!! Form::open(['method'=>'post', 'action'=>'PostController@store']) !!}
@include('admin.post.form')
{!! Form::close() !!}
@endsection

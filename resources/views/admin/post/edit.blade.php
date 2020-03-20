@extends('home')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@section('contents')

{!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostController@update', $post->id]]) !!}
@include('admin.post.form')
{!! Form::close() !!}
@endsection

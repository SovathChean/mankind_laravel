@extends('showing')

@section('heading')
<h5 class="card-header">Edit Post Type</h5>
@endsection

@section('table')
{!! Form::model($posts, ['method'=>'PATCH', 'action'=>['PostTypeController@update', $posts->id]]) !!}
<div class="form-group">
  {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
{!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection

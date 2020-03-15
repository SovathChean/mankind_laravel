@extends('home')

@section('contents')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm12 col-lg-12">
      <div class="iq-card-header">
        <div class="iq-header-title">
          <h4 class="card-title">Edit Health_topics</h4>
        </div>
      </div>
      <div class="iq-card">
        <div class="iq-card-body">
          {!! Form::model($topic, ['method'=>'PATCH', 'action'=>['HealthTopicController@update', $topic->id]]) !!}
          <div class="form-group">
            {!! Form::label('topic', 'Health Topics') !!}
            {!! Form::text('topic', null, ['class'=>'form-control']) !!}
          </div>
          {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

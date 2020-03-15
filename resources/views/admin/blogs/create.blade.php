@extends('home')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@section('contents')

{!! Form::open(['method'=>'post', 'action'=>'BlogsController@store']) !!}
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-8">
        <div class="iq-card">
          <div class="iq-card-body">
               <div class="form-group">
                 {!! Form::label('body', 'Blog body') !!}
                  <textarea class="form-control" id="summary-ckeditor" name="body"></textarea>
                  <script>
                      CKEDITOR.replace( 'summary-ckeditor', {
                          filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token()])}}",
                          filebrowserUploadMethod: 'form'
                      });
                  </script>
               </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
          <div class="iq-card">
              <div class="iq-card-body">
                  <div class="form-group">
                    {!! Form::label('title', 'Blog Title') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                  </div>
                   <div class="form-group">
                      {!! Form::label('ht_id', 'Blogs categories') !!}
                      {!! Form::select('ht_id', [' '=>'choose topic'] + $healths, null, ['class'=>'form-control', 'value'=>'$healths->id']) !!}
                   </div>
              </div>
          </div>
      </div>
    </div>
    {!! Form::submit('Add post', ['class'=>'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}
@endsection

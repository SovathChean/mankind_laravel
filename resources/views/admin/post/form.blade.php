<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-lg-8">
      <div class="iq-card">
        <div class="iq-card-body">
             <div class="form-group">
               {!! Form::label('body', 'Post body') !!}
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
                  {!! Form::label('title', 'Post Title') !!}
                  {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>
                 <div class="form-group">
                    {!! Form::label('pt_id', 'Posts categories') !!}
                    {!! Form::select('pt_id', [' '=>'sub-categories'] + $postTopics, null, ['class'=>'form-control', 'value'=>'$healths->id']) !!}
                 </div>
            </div>
        </div>
    </div>
  </div>
  {!! Form::submit('Add post', ['class'=>'btn btn-primary']) !!}
</div>

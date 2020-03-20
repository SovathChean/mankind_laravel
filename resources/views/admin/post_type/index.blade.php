@extends('home')

@section('contents')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="iq-card-header">
         <div class="card-header-title">
           <h5 class="card-title">Create Post Type</h5>
         </div>
       </div>
       <div class="iq-card">
         <div class="iq-card-body">
           {!! Form::open(['method'=>'post', 'action'=>'PostTypeController@store']) !!}
           <div class="form-group">
             {!! Form::text('name', null, ['class'=>'form-control']) !!}
           </div>
           {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
           {!! Form::close() !!}
         </div>
       </div>
    </div>
    <div class="col-sm-12 col-lg-12">
      <div class="iq-card">
        <div class="iq-card-body">
          <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered" >
                @role('doctor|Admin')
                <thead>
                  <tr>
                  <th>id</th>
                  <th>categories</th>
                  <th>created_at</th>
                  <th>update</th>
                  <th>delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($post_type as $post)
                    <tr>
                    <th>{{$post->id}}</th>
                    <th>{{$post->name}}</th>
                    <th>{{$post->created_at}}</th>
                    <td>
                        {!! Form::open(['method'=>'GET', 'action'=>['PostTypeController@edit', $post->id]]) !!}
                        {!! Form::submit('update', ['class'=>'btn btn-secondary']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td>
                         {!! Form::open(['method'=>'DELETE', 'action'=>['PostTypeController@destroy', $post->id]]) !!}
                        {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                @endrole
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

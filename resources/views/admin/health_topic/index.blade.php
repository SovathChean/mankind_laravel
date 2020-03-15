@extends('home')
<style media="screen">
  .user{
  margin-bottom: 20px;
  }
  .user a:hover {
    text-decoration: none;
  }
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

@section('contents')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-lg-12">
      <div class="iq-card-header">
         <div class="iq-header-title">
            <h4 class="card-title">Health Topics</h4>
         </div>
      </div>
      <div class="iq-card">
        <div class="iq-card-body">
          {!! Form::open(['method'=>'POST', 'action'=>'HealthTopicController@store']) !!}
          <div class="form-group">
            {!! Form::label('topic', 'Health Topics') !!}
            {!! Form::text('topic', null, ['class'=>'form-control']) !!}
          </div>
          {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
          {!! Form::close() !!}
        </div>
      </div>
       <div class="iq-card">
         <div class="iq-card-body">

           <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered" >
                 <thead>
                   <tr>
                     <th>id</th>
                     <th>name</th>
                     <th>created_at</th>
                     <th>updated_at</th>
                     <th>Update</th>
                     <th>Delete</th>
                   </tr>
                 </thead>
                 <tbody>

                   @foreach($health_topics as $health)
                     <tr>
                       <td>{{$health->id}}</td>
                       <td>{{$health->topic}}</td>
                       <td>{{$health->created_at}}</td>
                       <td>{{$health->updated_at}}</td>
                       <td>
                           {!! Form::open(['method'=>'GET', 'action'=>['HealthTopicController@edit', $health->id]]) !!}
                                {!! Form::submit('update', ['class'=>'btn btn-primary']) !!}
                           {!! Form::close() !!}
                       </td>
                       <td>
                         {!! Form::open(['method'=>'DELETE', 'action'=>['HealthTopicController@destroy', $health->id]]) !!}
                              {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                         {!! Form::close() !!}
                       </td>
                     </tr>
                   @endforeach
                 </tbody>
             </table>
           </div>
         </div>
       </div>
    </div>
  </div>
</div>

@endsection

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>

@extends('home')

@section('contents')

  <div class="container-fluid">
     <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="iq-card-header">
             <div class="iq-header-title">
                <h4 class="card-title">Blogs record</h4>
             </div>
          </div>
            <div class="iq-card">
               <div class="iq-card-body">
                 <div class="table-responsive">
                   <table id="datatable" class="table table-striped table-bordered" >
                         <thead>
                           <tr>
                             <th>id</th>
                             <th>Health_topic</th>
                             <th>Title</th>
                             <th>Publisher</th>
                             @role('doctor|Admin')
                             <th>Update</th>
                             <th>Delete</th>
                             @endrole
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($blogs as $blog)
                             <tr>
                               <td>{{$blog->id}}</td>
                               <td>{{$blog->health_topic->topic}}</td>
                               <td>{{$blog->title}}</td>
                               <td>{{$blog->user->name}}</td>
                               @role('doctor|Admin')
                               <td>
                                  {!! Form::open(['method'=>'GET', 'action'=>['BlogsController@edit', $blog->id]]) !!}
                                  {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                                  {!! Form::close() !!}
                               </td>
                               <td>
                                     {!! Form::open(['method'=>'DELETE', 'action'=>['BlogsController@destroy', $blog->id]]) !!}
                                     {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                     {!! Form::close() !!}
                               </td>
                               @endrole
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


@extends('home')
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
             {!! Form::open(['method'=>'POST', 'action'=>'DepartmentController@store']) !!}
             <div class="form-group">
                 {!! Form::text('name', null, ['class'=>'form-control']) !!}
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
                        <th>Department of Doctor</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                     <tbody>
                       @foreach($groups as $group)
                         <tr>
                           <td>{{$group->id}}</td>
                           <td>{{$group->name}}</td>
                           <td>{{$group->created_at}}</td>
                           <td>{{$group->updated_at}}</td>
                           <td>
                                {!! Form::open(['method'=>'GET', 'action'=>['DepartmentController@edit', $group->id]]) !!}
                                {!! Form::submit('update', ['class'=>'btn btn-primary']) !!}
                                {!! Form::close() !!}
                           </td>
                           <td>
                             {!! Form::open(['method'=>'DELETE', 'action'=>['DepartmentController@destroy', $group->id]]) !!}
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

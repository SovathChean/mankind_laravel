@extends('home')

@section('contents')
 <div class="container-fluid">
   <div class="row">
     <div class="col-sm-12 col-lg-12">
       <div class="iq-card-header">
         <div class="iq-header-title">
           <h4 class="card-title"> Role </h4>
         </div>
       </div>
         <div class="iq-card" style="width: 50%;">

           <div class="iq-card-body" >
               {!! Form::open(['method'=>'POST', 'action'=>'CreateRoleController@store']) !!}
               <div class="form-group">
                 {!! Form::label('role', 'Create Role') !!}
                 {!! Form::text('role', null, ['class'=>'form-control']) !!}
               </div>
               <p style="color: #1d2438;">Permission</p>
               @foreach($permissions as $permission)
               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                <input type="checkbox" name="permission[]" value="{{$permission->id}}" class="custom-control-input bg-info" id="{{$permission->name}}" >
                <label for="{{$permission->name}}" class="custom-control-label">{{$permission->name}}</label>
               </div>
              @endforeach

               <div class="form-group" style="margin-top: 10px;">
                 {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
               </div>

               {!! Form::close() !!}
           </div>
         </div>
         <div class="iq-card ">
            <div class="iq-card-body">
               <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" >
                     <thead>
                       <tr>
                         <th>role</th>
                         <th>guard_name</th>
                         <th>created_at</th>
                         <th>edit role</th>
                         <th>delete role</th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach($roles as $role)
                       <tr>

                         <td>{{$role->name}}</td>
                         <td>{{$role->guard_name}}</td>
                         <td>{{$role->created_at}}</td>
                         @role('doctor|Admin')
                         <td>
                             {!! Form::open(['method'=>'GET', 'action'=>['CreateRoleController@edit', $role->id]]) !!}
                             <div class="form-group">
                               {!! Form::submit('edit', ['class'=>'btn btn-primary']) !!}
                             </div>
                             {!! Form::close() !!}
                         </td>
                         <td>
                               {!! Form::open(['method'=>'DELETE', 'action'=>['CreateRoleController@destroy', $role->id]]) !!}
                               <div class="form-group">
                                  {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                               </div>
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

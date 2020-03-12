@extends('home')

@section('contents')
 <div class="container-fluid">
   <div class="row">
     <div class="col-sm-12 col-lg-6">
         <div class="iq-card">
           <div class="iq-card-body">
               {!! Form::open(['method'=>'POST', 'action'=>'CreateRoleController@store']) !!}
               <div class="form-group">
                 {!! Form::label('role', 'Create Role') !!}
                 {!! Form::text('role', null, ['class'=>'form-control']) !!}
               </div>
               <p style="color: #1d2438;">Permission</p>
               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                <input type="checkbox" name="permission[]" value="1" class="custom-control-input bg-info" id="edit" >
                <label for="edit" class="custom-control-label">Edit post</label>
               </div>
               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                <input type="checkbox" name="permission[]" value="2" class="custom-control-input bg-info" id="write" >
                <label for="write" class="custom-control-label">Write post</label>
               </div>
               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                <input type="checkbox" name="permission[]" value="3" class="custom-control-input bg-info" id="view" >
                <label for="view" class="custom-control-label">View post</label>
               </div>
               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                <input type="checkbox" name="permission[]" value="4" class="custom-control-input bg-info" id="delete" >
                <label for="delete" class="custom-control-label">Edit post</label>
               </div>
               <div class="form-group" style="margin-top: 10px;">
                 {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
               </div>

               {!! Form::close() !!}
           </div>
         </div>
     </div>
   </div>
 </div>
@endsection

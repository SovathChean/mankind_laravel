<div class="form-group">
 {!! Form::label('name', 'Username') !!}
 {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
     {!! Form::label('email', 'email') !!}
     {!! Form::email('email', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('role_id', 'Role') !!}
  {!! Form::select('role_id',[''=>'choose role'] + $roles, null, ['class'=>'form-control','value'=> '$roles->id']) !!}
</div>
<div class="form-group">
  {!! Form::label('department_id', 'Department') !!}
  {!! Form::select('department_id',[''=>'choose role'] + $departments, null, ['class'=>'form-control','value'=> '$roles->id']) !!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Description') !!}
  {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>'4', 'cols'=>'54']) !!}
</div>
<div class="form-group">
  {!! Form::label('fackbook_url', 'Facebook Link') !!}
  {!! Form::text('facebook_url', null, ['class'=>'form-control']) !!}

</div>
<div class="form-group">
  {!! Form::label('insta_url', 'Instagram Link') !!}
   {!! Form::text('insta_url', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
      {!! Form::label('password', 'password') !!}
     {!! Form::password('password', ['class'=>'form-control']) !!}
</div>
<div class="form-group">
   <p style="color: #000;">Profile</p>
   {!! Form::file('photo', ['class'=>'btn btn-mdb-color btn-rounded']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Add User', ['class'=>'btn btn-primary']) !!}
</div>

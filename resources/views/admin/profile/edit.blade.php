@extends('home')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-lg-12">
      <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
           <div class="iq-header-title">
              <h4 class="card-title">Create New User</h4>
           </div>
        </div>
        <div class="iq-card-body">
             {!! Form::model($user, ['method'=>'POST', 'action'=>['UsersController@update', $user], 'files'=>true]) !!}
                @include('admin.profile.form')
              {!! Form::close() !!}
        </div>
      <div class="iq-card">
        <div class="iq-card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
      </div>
      </div>
    </div>

  </div>
</div>

@endsection

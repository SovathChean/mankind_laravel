@extends('home')
<meta name="csrf_token" content="{{csrf_token()}}">
@section('contents')
  <div class="container-fluid">

                  <div class="row">
                      <div class="col-md-4">
                          <div class="profile-img">
                              <img src="/storage/uploads/{{$photo->url}}" alt=""/>
                              <div class="file btn btn-lg btn-primary">
                                  Change Photo
                                  <input type="file" name="file" id="file">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="profile-head">
                                      <h5>
                                          {{$user->name}}
                                      </h5>
                                      <h6>
                                          Mankind Medicare
                                      </h6>
                                      <p class="proile-rating">RANKINGS : <span>. . .</span></p>
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-md-2">
                        {!! Form::open(['method'=>'GET', 'action'=>['UsersController@edit', $user->id]]) !!}
                          {!! Form::submit('Edit Profile', ['class'=>'profile-edit-btn']) !!}
                        {!! Form::close() !!}

                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="profile-work">
                              <p>SOCIAL MEDIA</p>
                              <a href="{{$user->facebook_url}}">Facebook Link</a><br/>
                              <a href="{{$user->insta_url}}">Instagram Link</a><br/>
                            {{--
                              <p>SKILLS</p>
                              <a href="">Web Designer</a><br/>
                              <a href="">Web Developer</a><br/>
                              <a href="">WordPress</a><br/>
                              <a href="">WooCommerce</a><br/>
                              <a href="">PHP, .Net</a><br/> --}}
                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="tab-content profile-tab" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>User Id</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{$user->id}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Name</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{$user->name}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Email</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{$user->email}}</p>
                                              </div>
                                          </div>

                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>created_at</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{$user->created_at->diffForHumans()}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Updated_at</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{$user->updated_at->diffForHumans()}}</p>
                                              </div>
                                          </div>
                                          {{-- <div class="row">
                                              <div class="col-md-6">
                                                  <label>English Level</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>Expert</p>
                                              </div>
                                          </div> --}}
                                  @if(!is_null($user->description))
                                  <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                      <div class="col-md-6">
                                          <p>{{$user->description}}</p>
                                      </div>
                                  </div>
                                @endif
                              </div>
                          </div>
                      </div>
                  </div>

          </div>
@endsection
@push('scripts')
<script>
  $(document).ready(function(){
    $(document).on('change', '#file', function(ev){
     var form_data = new FormData();
     var a = $("#file").val();
     var file_data = document.querySelector('#file').files[0];
     form_data.append('file', file_data);
     $.ajax({
        headers:{'X-CSRF-Token':$('meta[name=csrf_token]').attr('content')},
        url:"{{url('/upload')}}",
        async:true,
        type:"post",
        contentType:false,
        cache: false,
        processData: false,
        data:{
            form_data,
             _token: '{!! csrf_token() !!}',
        },
        success:function(){
          console.log("success");
        }
     });

   });
  });
</script>
@endpush

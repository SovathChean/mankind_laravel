@extends('home')

@section('contents')
<div class="container-fluid">
  @if(!is_null($error))
   <div class="alert alert-warning" role="alert">
        {{$error}}
    </div>
  @endif
  <div class="row">
    <div class="col-sm-12 col-lg-12">
      <div class="iq-card-header">
        <div class="iq-header-title">
          <h4 class="card-title">Add Your Schedual</h4>
        </div>
      </div>
      <div class="iq-card">
        <div class="iq-card-body">

          {!! Form::open(['method'=> 'post', 'action'=>'SchedualController@store', 'id'=>'schedual']) !!}
            <div class="table-responsive">
               <table id="datatable" class="table table-striped table-bordered" >
                 <thead>
                   <tr>
                     <th>DayOfTheWeek</th>
                     <th>Morning</th>
                     <th>Afternoon</th>
                     <th>Evening</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($days as $day)
                   <tr>
                     <td>{{$day}}</td>
                     <td>
                       <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                              {!! Form::label('startTime', 'StartTime', []) !!}
                            <input type='text' class="form-control" id="start{{$day}}1" name="Start{{$day}}[]" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                              {!! Form::label('endTime', 'EndTime', []) !!}
                            <input type='text' class="form-control" id="end{{$day}}1" name="End{{$day}}[]" />
                        </div>
                      </div>
                    </div>
                      </td>
                      <td>
                        <div class="row">
                         <div class="col-sm-12 col-lg-6">
                             <div class="form-group">
                               {!! Form::label('startTime', 'StartTime', []) !!}
                             <input type='text' class="form-control" id="start{{$day}}2" name="Start{{$day}}[]" />
                           </div>
                         </div>
                         <div class="col-sm-12 col-lg-6">
                             <div class="form-group">
                               {!! Form::label('endTime', 'EndTime', []) !!}
                             <input type='text' class="form-control" id="end{{$day}}2" name="End{{$day}}[]" />
                         </div>
                       </div>
                     </div>

                       </td>
                       <td>
                         <div class="row">
                          <div class="col-sm-12 col-lg-6">
                              <div class="form-group">
                                {!! Form::label('startTime', 'StartTime', []) !!}
                              <input type='text' class="form-control" id="start{{$day}}3" name="Start{{$day}}[]" />
                              </div>
                          </div>
                          <div class="col-sm-12 col-lg-6">
                              <div class="form-group">
                                {!! Form::label('endTime', 'EndTime', []) !!}
                              <input type='text' class="form-control" id="end{{$day}}3" name="End{{$day}}[]" />
                          </div>
                        </div>
                      </div>
                        </td>
                   </tr>
                 @endforeach
                 </tbody>

              </table>
          </div>

            <div class="iq-card">
              <div class="iq-card-body">

                  {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}

              </div>
            </div>

          {!! Form::close() !!}
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script>
  $(function(){
    @foreach($days as $day)
         @for($i = 1; $i< 4; ++$i)
            $('#start{{$day}}{{$i}}').datetimepicker({
            format:'HH:mm:ss',
            });
            $('#end{{$day}}{{$i}}').datetimepicker({
            format:'HH:mm:ss',
            });
        @endfor
    @endforeach
  })
  </script>
@endpush

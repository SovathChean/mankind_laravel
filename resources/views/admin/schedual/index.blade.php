@extends('home')

@section('contents')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-lg-6">
      <div class="iq-card-header">
        <div class="iq-header-title">
          <h4 class="card-title">Add Schedual</h4>
        </div>
      </div>
      <div class="iq-card">
        <div class="iq-card-body">
          <form  action="javascript:void(0)" method="post" id="schedual">
            <div class="form-group">
              {!! Form::label('startTime', 'Start Time', []) !!}
              <input type='text' class="form-control" id='startTime' name="start" />
            </div>
            <div class="form-group">
              {!! Form::label('endTime', 'End Time', []) !!}
              <input type='text' class="form-control" id='endTime' name="end" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-lg-6">
      <div class="iq-card-header">
        <div class="iq-header-title">
          <h4 class="card-title">Schedual Records</h4>
        </div>
      </div>
      <div class="iq-card">
        <div class="iq-card-body">
          <div class="table-responsive">
             <table id="datatable" class="table table-striped table-bordered" >
               <thead>
                 <tr>

                   <th>StartTime</th>
                   <th>EndTime</th>
                   <th>Update</th>
                   <th>Delete</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach($schedual as $s)
                 <tr>
                   <td>{{$s->}}</td>
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
@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script>
  $(function(){
            $('#startTime').datetimepicker({
            format:'YYYY-MM-DD HH:mm:ss',
            });
            $('#endTime').datetimepicker({
            format:'YYYY-MM-DD HH:mm:ss',
            });
  })
  </script>
@endpush

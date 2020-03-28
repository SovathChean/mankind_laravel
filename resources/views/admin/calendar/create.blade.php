@extends('showing')

@section('heading')
<h4 class="card-title">Book Appointment</h4>
@endsection

@section('table')
{!! Form::open(['method'=>'post', 'action'=>'CalendarController@store']) !!}
  <div class="form-group">
    {!! Form::label('title', 'Your disease', []) !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('startTime', 'Start Time', []) !!}
    <input type='text' class="form-control" id='startTime' name="start" />
  </div>
  <div class="form-group">
    {!! Form::label('endTime', 'End Time', []) !!}
    <input type='text' class="form-control" id='endTime' name="end" />
  </div>
  <select id='search' style='width: 400px;'>
     <option value='0'>- Search user -</option>
  </select>
{!! Form::close() !!}
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(function () {

        $('#startTime').datetimepicker({
        format:'YYYY-MM-DD HH:mm:ss',
        });
        $('#endTime').datetimepicker({
        format:'YYYY-MM-DD HH:mm:ss',
        });

        $('#search').select2();
        output();
        function output(){
          $.getJSON('{{route('get.doctor')}}', function(data){
              $.each(data, function(i, item){
                $('#search').append('<option value="'+data[i].id+'">'+data[i].name+'</option>')
              })
          })
        }

    });

</script>



@endpush

@extends('home')

<link href="{{asset('fullcalendar/core/main.css')}}" rel='stylesheet' />
<link href="{{asset('fullcalendar/daygrid/main.css')}}" rel='stylesheet' />
<link href="{{asset('fullcalendar/timegrid/main.css')}}" rel='stylesheet' />
<link href="{{asset('fullcalendar/list/main.css')}}" rel='stylesheet' />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@section('contents')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="iq-card">
          <div class="iq-card-body">
            <a class="btn btn-primary" style="margin-bottom: 20px;" href="{{route('calendar.create')}}">Book Appointment</a>
            <div id="calendar">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
<script src='{{asset('fullcalendar/core/main.js')}}'></script>
<script src='{{asset('fullcalendar/daygrid/main.js')}}'></script>
<script src='{{asset('fullcalendar/timegrid/main.js')}}'></script>
<script src='{{asset('fullcalendar/list/main.js')}}'></script>
<script src='{{asset('fullcalendar/interaction/main.js')}}'></script>
<script src='{{asset('fullcalendar/moment/main.js')}}'></script>
<script src='{{asset('fullcalendar/moment-timezone/main.js')}}'></script>
<script src='{{asset('fullcalendar/rrule/main.js')}}'></script>
<script src='{{asset('fullcalendar/bootstrap/main.js')}}'></script>
<script src='{{asset('fullcalendar/luxon/main.js')}}'></script>
<script src='{{asset('fullcalendar/google-calendar/main.js')}}'></script>


</script>
</script>

</script>

</script>
<!-- Flatpicker Js -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Chart Custom JavaScript -->

<script type="text/javascript">
//calender 1 js
if(jQuery('#calendar').length){
 document.addEventListener('DOMContentLoaded', function() {
             var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
               plugins: [ 'interaction', 'timeGrid', 'dayGrid', 'list' ],
               editable:true,
               selectable: true,
               timeZone: 'UTC',
               defaultView: 'dayGridMonth',
               header: {
                  left: 'prev,next today',
                  center: 'title',
                  right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
               },
               events: <?php echo $event;?>,
               selectHelper:true,

            });

            calendar.render();
         });
}



</script>
@endpush

@extends('showing')

@section('heading')
<h4>Schedual</h4>
@endsection

@section('table')
<div class="table-responsive">
  <table  id="datatable" class="table table-striped table-bordered" >
    <thead>
      <tr>
        <th>DayOfTheWeek</th>
        <th>Morning</th>
        <th>Afternoon</th>
        <th>Evening</th>
      </tr>
    </thead>
    <tbody>
      @foreach($scheduals as $schedual)
      <tr>
        <td>{{$schedual->wod}}</td>

             {{-- @for($i = 0; $i<count($schedual->start); ++$i)
               @if(!is_null($schedual->start[$i]))
               <td>   {{$schedual->start[$i]}} </td>
               @else
                 <td>Not available</td>
               @endif
             @endfor --}}


      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection

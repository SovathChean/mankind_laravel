@extends('home')

@section('contents')

  <div class="container-fluid">
     <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="iq-card-header">
             <div class="iq-header-title">
                @yield('heading')
             </div>
          </div>
            <div class="iq-card">
               <div class="iq-card-body">
                 @yield('table')
               </div>
            </div>
        </div>
     </div>

  </div>

@endsection

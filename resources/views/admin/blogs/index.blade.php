@extends('home')

@section('contents')

  <div class="container-fluid">
     <div class="row">
        <div class="col-sm-12">
          <div class="iq-card-header">
             <div class="iq-header-title">
                <h4 class="card-title">Blogs Datatables</h4>
             </div>
          </div>
              <div class="iq-card">
                    <div class="iq-card-body">
                       <div class="table-responsive">
                  @can('create', App\User::class)
                <table id="datatable" class="table table-striped table-bordered" >
                   <thead>
                       <tr>
                           <th>Topic</th>
                           <th>Poster</th>
                           <th>Title</th>
                           <th>Body</th>
                           <th>Created_at</th>
                           <th>Update_at</th>
                       </tr>
                   </thead>
                   <tbody>

                       <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>$320,800</td>
                       </tr>
                  </tbody>
                 </table>
               @endcan
                       </div>
                    </div>
                 </div>
        </div>
     </div>

  </div>

@endsection

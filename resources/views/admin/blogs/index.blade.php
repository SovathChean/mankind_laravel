{{-- @extends('home')

@section('contents')

  <div class="container-fluid">
     <div class="row">
        <div class="col-sm-12">
              <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title">Blogs Datatables</h4>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>
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

@endsection --}}
@extends('home')

@section('contents')

    @can('edit post')
      <h1>Editor</h1>
    @endcan
    @role('writer')
      <h1>Writtor</h1>
    @endrole
    @role('publisher')
      <h1>Publisher</h1>
    @endrole
    @role('Admin')
      <h1>Admin</h1>
    @endrole
@endsection

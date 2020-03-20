@extends('home')
<style media="screen">
  .user{
  margin-bottom: 20px;
  }
  .user a:hover {
    text-decoration: none;
  }
</style>
<!-- Datatable -->

@section('contents')
 <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="iq-card-header d-flex justify-content-between">
           <div class="iq-header-title">
              <h4 class="card-title">Blogs Datatables</h4>
           </div>
        </div>
       <div class="iq-card">
        <div class="iq-card-body">
          @role('Admin')
          <button class="btn btn-success user" ><a href="{{route('user.create')}}"> Create New User </a> </button>
          @endrole
            <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-bordered" >
                     <thead>
                      <tr>
                      <th>id</th>
                      <th>name</th>
                      <th>role</th>
                      <th>email</th>
                      <th>created_at</th>
                      @role('Admin')
                      <th>Assigned_role</th>
                      <th>update</th>
                      <th>intro</th>
                      @endrole
                      </thead>
                  </table>
                </div>
            </div>
        </div>
      </div>
    </div>
 </div>
@endsection
@push('scripts')
<script>
$(function() {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route('get.users')}}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'role', name: 'role'},
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            @role('Admin')
            { data: 'select_role', name: 'select_role'},
            { data: 'update', name: 'update',  orderable: false, searchable: false },
            { data: 'action', name: 'action'},
            @endrole
        ]
    });

});
</script>
@endpush

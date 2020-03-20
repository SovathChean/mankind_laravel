@extends('home')

@section('contents')

  <div class="container-fluid">
     <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="iq-card-header">
             <div class="iq-header-title">
                <h4 class="card-title">Posts record</h4>
             </div>
          </div>
            <div class="iq-card">
               <div class="iq-card-body">
                 <div class="table-responsive">
                   <table id="datatable" class="table table-striped table-bordered" >
                         <thead>
                           <tr>
                             <th>id</th>
                             <th>Post_Topic</th>
                             <th>Title</th>
                             <th>Publisher</th>
                             <th>Update</th>
                             <th>Delete</th>
                           </tr>
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
        ajax: '{{route('get.posts')}}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'postType', name: 'postType' },
            { data: 'title', name: 'title'},
            { data: 'users', name: 'users'},
            { data: 'update', name: 'update'},
            { data: 'action', name: 'action'},
        ]
    });

});
</script>
@endpush

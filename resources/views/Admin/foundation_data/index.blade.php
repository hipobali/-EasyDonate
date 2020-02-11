@extends('layouts.admin.main')
@section('content')

    <div class="page-wrapper chiller-theme toggled">
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container" id="back_to">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{url('/')}}" target="_blank">BACK TO HOME</a>
                    </div>
                </div>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ session()->get('message') }}</strong>
                </div>
            @endif
            <div class="container-fluid">
              
                <div class="table-responsive">
                    <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Founder</th>
                            <th>Year</th>
                            <th>Month</th>
                            <th>Day</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>President Name</th>
                            <th>Certificate</th>
                            <th>Member</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody id="table_body">
                        @forelse($foundation as $key => $data)
                         <tr>
                         <td>{{ $key+1 }}</td>
                         <td class="text-center">
                         <img src="{{url('uploads/'.$data->foundation_profile)}}" class="img-fluid"></td>
                         <td class="text-center">{{$data->user->    name}}</td>
                         <td class="text-center">{{$data->foundation_name}}</td>
                         <td class="text-center">{{$data->year_picker}}</td>
                         <td class="text-center">{{$data->month_picker}}</td>
                       <td class="text-center">{{$data->day_picker}}</td>
                         <td class="text-center">{{$data->user->email}}</td>
                         <td class="text-center">{{$data->address}}</td>
                                <td class="text-center">{{$data->phone}}</td>
                                <td class="text-center">{{$data->president_name}}</td>
                                <td class="text-center">{{$data->foundation_certificate}}</td>
                                <td class="text-center">{{$data->member_count}}</td>
                                <td class="text-center">{{$data->created_at}}</td>
                         <td class="text-center">{{$data->updated_at}}</td>
                               <td><i class="fas fa-trash-alt delete_i" data-id="{{ $data->id }}" id="show_btn"></i></td>
                            </tr>
                       @empty
                           <tr><td colspan="16" class="text-center"> There is no data </td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div><!--end of .table-responsive-->
            </div>
        </main>
        <!-- page-content" -->
      
        <!-- Start Delete Modal -->
        <div class="modal" id="deleteModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Foundation</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        Sure to delete
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <form method="post" id="delete_form">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="Yes">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Edit Modal -->
    </div>
   
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("click","#show_btn",function() {
                var id = $(this).attr('data-id');
                var link = window.location.href + '/' + id;
                $("#delete_form").attr("action",link);
                $('#deleteModal').modal('show');
            });

            $(document).on("click","#show_edit_btn",function(){
                var id = $(this).attr('data-id');
                $.ajax({
                    type:'GET',
                    url:'category/'+id+'/edit',
                    success:function(data){
                        $('#category_name').val(data.data.category_name);
                    }
                });
                var link = window.location.href + '/' + id;
                $("#edit_form").attr("action",link);
                $('#editModal').modal('show');
            });

            function RemoveLastDirectoryPartOf(the_url)
            {
                var the_arr = the_url.split('/');
                the_arr.pop();
                return( the_arr.join('/') );
            }
        });
    </script>
@endsection

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
                <div class="row justify-content-end">
                    <div class="col-md-3 text-right">
                        <p class="plus_category btn" data-toggle="modal" data-target="#createModal"><i class="far fa-plus-square"></i>Add Category</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody id="table_body">
                        @forelse($category as $key => $data)
                         <tr>
                               <td>{{ $key+1 }}</td>
                                <td class="text-center">{{ $data->category_name }}</td>
                               <td><i class="fas fa-user-edit edit_i" data-id="{{ $data->id }}" id="show_edit_btn"></i><i class="fas fa-trash-alt delete_i" data-id="{{ $data->id }}" id="show_btn"></i></td>
                            </tr>
                       @empty
                           <tr><td colspan="5" class="text-center"> There is no data </td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div><!--end of .table-responsive-->
            </div>
        </main>
        <!-- page-content" -->
        <!-- Start Create Modal -->
        <div class="modal" id="createModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body -->
                        <div class="modal-body">
                            <div class="input-group row">
			        <span class="col-sm-4 mt-2">
			          	<label>Name</label>
			        </span>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="category_name" name="category_name" required="true"/>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Save">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Of Create Modal -->
        <!-- Start Edit Modal -->
        <div class="modal" id="editModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <form id="edit_form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="modal-body">
                            <div class="input-group row">
			        <span class="col-sm-4 mt-2">
			          	<label>Name</label>
			        </span>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="category_name" name="category_name" required="true" id="category_name" />
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Save">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End of edit Modal -->
        <!-- Start Delete Modal -->
        <div class="modal" id="deleteModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Gallery</h4>
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

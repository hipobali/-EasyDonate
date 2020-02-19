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
	            <table class="table table-bordered table-hover">
		              <thead>
			                <tr>
			                  <th>No</th>
			                  <th>Name</th>
			                  <th>Email</th>
			                  <th>Actions</th>
			                </tr>
		              </thead>
		              @php
		              $user = App\User::get();
		              @endphp
		              <tbody>
		              		@foreach($user  as $key => $data)
			                <tr>
			                  <td>{{ $key+1 }}</td>
			                  <td>{{ $data->name }}</td>
			                  <td>{{ $data->email }}</td>
			                  <td><i class="fas fa-edit edit_i" data-id="{{ $data->id }}" id="show_edit_btn"></i></td>
			                  @endforeach
			                </tr>
		              </tbody>
	            </table>
	      </div><!--end of .table-responsive-->
	    </div>
	</main>
	<!-- page-content" -->
	<!-- The Modal -->
</div>

<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

{{--      <!-- Modal body -->--}}
{{--      	<form id="edit_form" method="post" enctype="multipart/form-data">--}}
{{--      	@csrf--}}
{{--      	<input type="hidden" name="user_id" id="user_id">--}}
{{--	      <div class="modal-body">--}}
{{--	        <div class="input-group row">--}}
{{--		        <span class="col-sm-4 mt-2">--}}
{{--		          	<label>Name</label>--}}
{{--		        </span>--}}
{{--          		<div class="col-sm-8">--}}
{{--          			<input type="text" class="form-control" placeholder="Name" name="name" required="true" id="name" value="{{ Auth::user()->name }}"/>--}}
{{--          		</div>--}}
{{--	        </div>--}}
{{--	        <div class="input-group row">--}}
{{--		        <span class="col-sm-4 mt-2">--}}
{{--		            <label>Password</label>--}}
{{--		        </span>--}}
{{--          		<div class="col-sm-8">--}}
{{--	          		<input type="password" class="form-control" placeholder="Password" name="password" id="password"/>--}}
{{--	          	</div>--}}
{{--	        </div>--}}
{{--	        <div class="input-group row">--}}
{{--		        <span class="col-sm-4 mt-2">--}}
{{--		            <label>Confirm Password</label>--}}
{{--		        </span>--}}
{{--          		<div class="col-sm-8">--}}
{{--	          		<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" onchange="check();"/>--}}
{{--	          		<span id='error_message'></span>--}}
{{--	          	</div>--}}
{{--	        </div>--}}
{{--	      </div>--}}

{{--	      <!-- Modal footer -->--}}
{{--	      <div class="modal-footer">--}}
{{--	        <input type="submit" class="btn btn-primary" value="Save" id="change_password">--}}
{{--	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>--}}

{{--	      </div>--}}
{{--        </form>--}}
    </div>
  </div>
</div>

<script type="text/javascript">
	function check() {
	    if(document.getElementById('password').value ===
	            document.getElementById('confirm_password').value) {
	        document.getElementById('error_message').innerHTML = "";
	    $('#change_password').attr('disabled',false);
	    } else {
	        document.getElementById('error_message').innerHTML = "Not match password";
	        $('#change_password').attr('disabled',true);
	    }
	}
	$(document).ready(function() {
	    $(document).on("click","#show_edit_btn",function() {
         	var id = $(this).attr('data-id');
         	var link = '{{ url("change_password") }}';
     		$('#user_id').val(id);
         	$("#edit_form").attr("action",link);
	    	$('#editModal').modal('show');
	    });

	});
</script>
@endsection

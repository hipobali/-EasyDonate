@extends('layout.admin.main')

@section('content')

<div class="page-wrapper chiller-theme toggled">
	<!-- sidebar-wrapper  -->
	<main class="page-content">
      <div class="container" id="back_to">
        <div class="row">
          <div class="col-md-12">
            <a href="{{url('/')}}">BACK TO HOME</a>
          </div>
        </div>
      </div>
	    <div class="container-fluid">
	      <div class="table-responsive">
	            <table class="table table-bordered table-hover">
		              <tbody class="text-center">
			                <tr>
			                  <th>Name</th>
			                  <td>{{ Auth::user()->name }}</td>
			                </tr>
			                <tr>
			                	<th>Email</th>
			                	<td>{{ Auth::user()->email }}</td>			                 
			                </tr>
			                <tr>
			                	<th>Created Date</th>
			                	<td>{{ isset(Auth::user()->created_at)? Auth::user()->created_at->diffForHumans() : '' }}</td>
							</tr>			                	
		              </tbody>
	            </table>
	      </div><!--end of .table-responsive-->
	    </div>
	</main>
	<!-- page-content" -->
	<!-- The Modal -->
</div>

@endsection
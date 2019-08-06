@extends('layouts.app')
@extends('layouts.nav')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.css')}}"/>
    <script type="text/javascript" src="{{asset('DataTables/datatables.js')}}"></script>

    <div class="container-fluid pt-5">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Location</th>
                <th>Applicant Name</th>
                <th>Items Requested</th>
                <th>Cost</th>
                <th>Significance</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Remark</th>
                <th>Created date</th>
                <th>Updated date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user_post as $user_posts)
                <tr>
                    <td>{{$user_posts->id}}</td>
                    <td>{{$user_posts->title}}</td>
                    <td>{{$user_posts->location}}</td>
                    <td>{{$user_posts->name}} Name</td>
                    <td>{{$user_posts->items_requested}}</td>
                    <td>{{$user_posts->cost}}</td>
                    <td>{{$user_posts->significance}}</td>
                    <td>{{$user_posts->phone}}</td>
                    <td>
                        <img class="rounded" src="{{route('get_user_post_image',[$user_posts->image])}}" style="width:50px;height: 50px;">
                    </td>
                    <td>{{$user_posts->remark}}</td>
                    <td>{{$user_posts->created_at}}</td>
                    <td>{{$user_posts->updated_at}}</td>
                    <td>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#userPostDelete{{$user_posts->id}}" href="#">Delete</a>
                    </td>
                    <div class="modal fade" id="userPostDelete{{$user_posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this post?</p>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-success" data-dismiss="modal">Cancel</a>
                                    <a class="btn btn-danger" href="{{route('user_post_data_delete',[$user_posts->id])}}">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Location</th>
                <th>Applicant Name</th>
                <th>Items Requested</th>
                <th>Cost</th>
                <th>Significance</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Remark</th>
                <th>Created date</th>
                <th>Updated date</th>
                <th>Delete</th>
            </tr>
            </tfoot>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection

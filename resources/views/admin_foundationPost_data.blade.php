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
                <th>Detail</th>
                <th>Image</th>
                <th>Post's category</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($foundation_post as $foundation_posts)
                <tr>
                    <td>{{$foundation_posts->id}}</td>
                    <td>{{$foundation_posts->f_post_detail}}</td>
                    <td>{{$foundation_posts->f_post_image}}</td>
                    <td>{{$foundation_posts->f_post_category}}</td>
                    <td>{{$foundation_posts->created_at}}</td>
                    <td>{{$foundation_posts->updated_at}}</td>
                    <td>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#foundationPostDelete{{$foundation_posts->id}}" href="#">Delete</a>
                    </td>
                    <div class="modal fade" id="foundationPostDelete{{$foundation_posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this post?</p>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-success" data-dismiss="modal">Cancel</a>
                                    <a class="btn btn-danger" href="{{route('foundation_post_data_delete',[$foundation_posts->id])}}">Delete</a>
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
                <th>Detail</th>
                <th>Image</th>
                <th>Post's category</th>
                <th>Created Date</th>
                <th>Updated Date</th>
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

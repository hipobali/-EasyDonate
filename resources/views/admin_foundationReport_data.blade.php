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
                <th>Foundation Name</th>
                <th>Option</th>
                <th>Created Date</th>
                <th>Updated Date</th>

            </tr>
            </thead>
            <tbody>
            @foreach($report_post as $report_posts)
                <tr>
                    <td>{{$report_posts->id}}</td>
                    <td>{{$report_posts->report_foundation_name}}</td>
                    <td>{{$report_posts->report_foundation_option}}</td>
                    <td>{{$report_posts->created_at}}</td>
                    <td>{{$report_posts->updated_at}}</td>
{{--                    <td>--}}
{{--                        <a class="btn btn-danger" data-toggle="modal" data-target="#reportPostDataDelete{{$report_posts->id}}" href="#">Delete</a>--}}
{{--                    </td>--}}
{{--                    <div class="modal fade" id="reportPostDataDelete{{$report_posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p>Are you sure you want to delete this post?</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <a class="btn btn-success" data-dismiss="modal">Cancel</a>--}}
{{--                                    <a class="btn btn-danger" href="{{route('report_post_delete',[$report_posts->id])}}">Delete</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Foundation Name</th>
                <th>Option</th>
                <th>Created Date</th>
                <th>Updated Date</th>
{{--                <th>Delete</th>--}}
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

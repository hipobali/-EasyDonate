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
                <th>User Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Created date</th>
                <th>Updated date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($people as $peoples)
                <tr>
                    <td>{{$peoples->user_id}}</td>
                    <td>
                        <img class="rounded" src="{{route('getUserProfile',[$peoples->user_profile])}}"style="width:50px;height: 50px;">
                    </td>
                    <td>{{$peoples->user->name}}</td>
                    <td>{{$peoples->user->email}}</td>
                    <td>{{$peoples->address}}</td>
                    <td>{{$peoples->phone}}</td>
                    <td>{{$peoples->user_gender}}</td>
                    <td>{{$peoples->created_at}}</td>
                    <td>{{$peoples->updated_at}}</td>
                    <td><a class="btn btn-danger" data-toggle="modal" data-target="#userUpdate{{$peoples->user_id}}" href="#">Delete</a></td>
                    <div class="modal fade" id="userUpdate{{$peoples->user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this user?</p>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-success" data-dismiss="modal">Cancel</a>
                                    <a class="btn btn-danger" href="{{route('userInfoDelete',[$peoples->user_id])}}">Delete</a>
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
                <th>User Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Gender</th>
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

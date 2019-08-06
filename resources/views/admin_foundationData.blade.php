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
                <th>Created date</th>
                <th>Updated date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($foundation as $foundations)
                <tr>
                    <td>{{$foundations->id}}</td>
                    <td>
                        <img class="rounded" src="{{route('getFoundationProfile',[$foundations->foundation_profile])}}" style="width:50px;height: 50px;">
                    </td>
                    <td>{{$foundations->foundation_name}}</td>
                    <td>{{$foundations->user->name}}</td>
                    <td>{{$foundations->year_picker}}</td>
                    <td>{{$foundations->month_picker}}</td>
                    <td>{{$foundations->day_picker}}</td>
                    <td>{{$foundations->user->email}}</td>
                    <td>{{$foundations->address}}</td>
                    <td>{{$foundations->phone}}</td>
                    <td>{{$foundations->president_name}}</td>
                    <td>
                        <img class="rounded" src="{{route('getFoundationCertificate',[$foundations->foundation_certificate])}}" style="width:50px;height: 50px;">
                    </td>
                    <td>{{$foundations->member_count}}</td>
                    <td>{{$foundations->created_at}}</td>
                    <td>{{$foundations->updated_at}}</td>
                    <td><a class="btn btn-danger" data-toggle="modal" data-target="#foundationUpdate{{$foundations->user_id}}" href="#">Delete</a></td>
                    <div class="modal fade" id="foundationUpdate{{$foundations->user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this foundation?</p>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-success" data-dismiss="modal">Cancel</a>
                                    <a class="btn btn-danger" href="{{route('foundationInfoDelete',[$foundations->user_id])}}">Delete</a>
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

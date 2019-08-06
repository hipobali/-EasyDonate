@extends('layouts.app')
@extends('layouts.nav')
@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" style="background-color: #010c1e;color: white">
                        Please add new categories.
                    </div>
                    <div class="card-body" style="background-color: #e6e5ff">
                        <form method="POST" action="{{route('category_post')}}">
                            <div class="form-group">
                                <label for="category_name">Add new category name</label>
                                <input type="text" class="form-control" name="category_name" id="category_name" required>
                            </div>
                            <button class="btn btn-primary form-control" type="submit">submit</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #010c1e;color: white">
                        All Categories
                    </div>
                    <div class="table" style="background-color: #e6e5ff;margin-bottom: 0">
                        <table style="width: 100%">
                            <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($category as $categories)
                                <tr>
                                    <td style="border-top: 1px solid #5883a3;">{{$categories->id}}</td>
                                    <td style="border-top: 1px solid #5883a3;">{{$categories->category_name}}</td>
                                    <td style="border-top: 1px solid #5883a3;"><a class="btn btn-success" data-toggle="modal" data-target="#categoryUpdate{{$categories->id}}" href="#">Edit</a></td>
                                    <td style="border-top: 1px solid #5883a3;"><a class="btn btn-danger" href="{{route('category_delete',[$categories->id])}}">Delete</a></td>
                                    <div class="modal fade" id="categoryUpdate{{$categories->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Category Name</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="{{route('category_update',[$categories->id])}}">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="category_name">Update Category Name</label>
                                                            <input type="text" class="form-control" name="category_name" id="category_name" value="{{$categories->category_name}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

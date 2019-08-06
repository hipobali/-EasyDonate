@extends('layouts.app')
@section('title')
    User Register
@stop
@section('content')
    <script src="{{ asset('js/userRegister.js') }}"></script>
    <link href="{{ asset('css/userRegister.css')}}" rel="stylesheet">
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
    <div class='container'>
        <div class="row">
            <div class="col-md-6 left-side">
                <h1 style="margin-top:100px;">Let's Join With Us</h1>
                <p style="margin-top: 50px;"><strong>
                        "Do all the good you can,<br>
                        By all the means you can,<br>
                        In all the ways you can,<br>
                        In all the places you can,<br>
                        At all the people you can,<br>
                        As long as ever you can "<br>
                    </strong>
                    <br>
                    <i><b>--John Wesley--</b></i>
                </p>
                <img class="pp img-fluid" src="../../../img/pp.png" style="margin-top: 100px;">
            </div>
            <div class="col-md-6">
                <div class="card box-shadow ">
                    <form method="post" action="{{route('people_register')}}" enctype="multipart/form-data">
                        <div class="card-header text-center">
                            <div class="image_upload row">
                                <img class="img_before_user_profile img-fluid rounded-circle" src="../../../img/camera_user.png">
                                <div class="upload_text">
                                    <label class="btn">
                                        <div class="text">Upload<br>Profile<br>Picture</div>
                                        <input type="file" class="img-upload" name="user_profile" style="display: none;">
                                    </label>
                                </div>
                            </div>
                            <h4>User SignUp</h4>
                        </div>
                        <div class="card-body">
                            @if(Session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{Session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if(count($errors))
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.
                                </div>
                            @endif
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <span class="text-danger">{{ $errors->first('user_profile') }}</span>
                            <div class="form-group" {{ $errors->has('name') ? 'has-error' : '' }}>
                                <label for="name"><i class="fa fa-user"></i>&nbsp Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                                <label for="email"><i class="fa fa-envelope"></i>&nbsp Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="email@address.com" value="{{old('email')}}">
                                <span class="text-danger">{{ $errors->first('mail') }}</span>
                        </div>
                            <div class="form-group" {{ $errors->has('address') ? 'has-error' : '' }}>
                                <label for="address"><i class="fa fa-home"></i>&nbsp Address</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{old('address')}}">
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                <label for="phone"><i class="fa fa-phone"></i>&nbsp Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="09********* (mobile)" value="{{old('phone')}}">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                            <div class="form-group" {{ $errors->has('user_gender') ? 'has-error' : '' }}>
                                <label for="user_gender"><i class="fa fa-transgender-alt"></i>&nbsp Gender</label>
                                <div class="row user_gender-radio">
                                    <div class="col-md-4"><label class="radio-inline"><input type="radio" name="user_gender" value="Male" checked>
                                            Male</label></div>
                                    <div class="col-md-4"><label class="radio-inline"><input type="radio" name="user_gender" value="Female">
                                            Female</label></div>
                                    <div class="col-md-4"><label class="radio-inline"><input type="radio" name="user_gender" value="Others">
                                            Others</label></div>
                                </div>
                            </div>
                            <div class="form-group" {{ $errors->has('password') ? 'has-error' : '' }}>
                                <label for="password"><i class="fa fa-key"></i>&nbsp Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('confirm_password') ? 'has-error' : '' }}>
                                <label for="confirm_password"><i class="fa fa-key"></i>&nbsp Confirm Password</label>
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group row">
                                <div class="col-6">
                                    <a href="{{url('donor/home')}}" class="btn form-control btnCancel">Cancel</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn form-control btnSave">Save</button>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                Already have an account? <a id="login" href="{{url('people/login')}}" style="text-decoration: none">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop

@extends('layouts.app')
@section('title')
    Foundation Login
@stop
@section('content')
    <script src="{{ asset('js/foundationLogin.js') }}"></script>
    <link href="{{ asset('css/foundationLogin.css')}}" rel="stylesheet">
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 text-center left-side">
                <h1>Login to Your Account</h1>
                <p style="margin-top: 50px;"><strong>
                        "Your greatness<br>
                        is not what you have,<br>
                        it's what you give."<br>
                    </strong>
                    <br>
                    <i><b>--Winston Churchill--</b></i>
                </p>
                <img class="img-fluid" src="../../../img/community2.png" width="200px" style="margin-top: 40px">
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <img src="../../../img/test.png" width="70px" height="70px">
                        <h3>Foundation Login  {{ __('Login') }}</h3>
                    </div>
                    <form method="post" action="{{url('foundation/login')}}">
                        <div class="card-body">
                            @if(Session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{Session('error')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope"></i>&nbsp Email</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="email@address.com">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fa fa-lock"></i>&nbsp Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                                    <div class="input-group-append">
                                            <span class="input-group-text">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </span>
                                    </div>
                                </div>
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group row">
                                <div class="col-6">
                                    <a href="{{url('donor/home')}}"  class="btn  form-control btnCancel">Cancel</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn  form-control btnSave">Login</button>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                Already have an account? <a id="login" href="{{url('foundation/register/view')}}" style="text-decoration: none">Register</a>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

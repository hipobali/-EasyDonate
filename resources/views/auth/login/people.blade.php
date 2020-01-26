@extends('layouts.app')
@section('title')
    User Register
@stop
@section('content')
    <script src="{{ asset('js/userLogin.js') }}"></script>
    <link href="{{ asset('css/userLogin.css')}}" rel="stylesheet">
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../fontawesome-free-5.9.0-web/css/all.css')}}">
    <div class='container' >
        <div class="row " style="margin-top:50px;">
            <div class="col-md-6 text-center left-side">
                <div class="text_point ">
                    <img src="../../../img/left_kanote.png" class="left_kanote" style="vertical-align: middle">
                    <h3 style="color: hsl(35,100%,50%)">&nbsp;{{__('user.login_to_account')}}&nbsp;</h3>
                    <img src="../../../img/right_kanote.png" class="right_kanote" style="vertical-align: middle">
                </div>
                <p style="margin-top: 50px;"><strong>
                        "{{__('user.login_quote1')}}<br>
                        {{__('user.login_quote2')}}<br>
                        {{__('user.login_quote3')}}"<br>
                    </strong>
                    <br>
                    <i><b>--{{__('user.login_writer')}}--</b></i>
                </p>
                <img class="img-fluid" src="../../../img/community2.png" width="200px" style="margin-top: 40px">
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <form method="post" action="{{url('people/login')}}">
                        <div class="card-header text-center">
                            <img src="../../../img/test.png" alt="Easy Donate Logo" width="70px" height="70px">
                            <h4>{{__('user.login_form')}}</h4>
                        </div>
                        <div class="card-body">
                            @if(Session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{Session('error')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <span class="text-danger">{{ $errors->first('user_profile') }}</span>

                            <div class="form-group md-form" {{ $errors->has('email') ? 'has-error' : '' }}>
                                <i class="fa fa-envelope"></i> <label for="email">&nbsp {{__('common.email')}}</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="email@address.com" value="{{old('email')}}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('password') ? 'has-error' : '' }}>
                                <i class="fas fa-lock"></i><label for="password">&nbsp {{__('user.password')}}</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" id="password" name="password" class="form-control" placeholder={{__('user.enter_pw')}}>
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
                                    <a href="{{url('donor/home')}}" class="btn btn-light form-control btnCancel">{{__('user.login_cancel')}}</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-light  form-control btnSave">{{__('user.login')}}</button>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                {{__('user.ask_account')}} <a id="login" href="{{url('people/register/view')}}" style="text-decoration: none">{{__('user.register')}}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop


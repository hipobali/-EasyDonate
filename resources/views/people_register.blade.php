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
                <div class="text_point ">
                    <img src="../../../img/left_kanote.png" class="left_kanote" style="vertical-align: middle">
                    <h3 style="color: hsl(35,100%,50%); margin-top: 20%">&nbsp;{{__('user.register_account')}}&nbsp;</h3>
                    <img src="../../../img/right_kanote.png" class="right_kanote" style="vertical-align: middle">
                </div>
                <p style="margin-top: 50px;"><strong>
                        "{{__('user.reg_quote1')}}<br>
                        {{__('user.reg_quote2')}}<br>
                        {{__('user.reg_quote3')}}<br>
                        {{__('user.reg_quote4')}}<br>
                        {{__('user.reg_quote5')}}<br>
                        {{__('user.reg_quote6')}} "<br>
                    </strong>
                    <br>
                    <i><b>--{{__('user.reg_writer')}}--</b></i>
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
                                        <div class="text">{{__('user.upload')}}<br>{{__('user.profile')}}<br>{{__('user.picture')}}</div>
                                        <input type="file" class="img-upload" name="user_profile" style="display: none;">
                                    </label>
                                </div>
                            </div>
                            <h4>{{__('user.register_form')}}</h4>
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
                                <label for="name"><i class="fa fa-user"></i>&nbsp {{__('user.name')}}</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                                <label for="email"><i class="fa fa-envelope"></i>&nbsp {{__('common.email')}}</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="email@address.com" value="{{old('email')}}">
                                <span class="text-danger">{{ $errors->first('mail') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('address') ? 'has-error' : '' }}>
                                <label for="address"><i class="fa fa-home"></i>&nbsp {{__('user.address')}}</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{old('address')}}">
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                <label for="phone"><i class="fa fa-phone"></i>&nbsp {{__('common.phone')}}</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="09********* (mobile)" value="{{old('phone')}}">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                            <div class="form-group" {{ $errors->has('user_gender') ? 'has-error' : '' }}>
                                <label for="user_gender"><i class="fa fa-transgender-alt"></i>&nbsp {{__('user.gender')}}</label>
                                <div class="row user_gender-radio">
                                    <div class="col-md-4"><label class="radio-inline"><input type="radio" name="user_gender" value="Male" checked>
                                            {{__('user.male')}}</label></div>
                                    <div class="col-md-4"><label class="radio-inline"><input type="radio" name="user_gender" value="Female">
                                            {{__('user.female')}}</label></div>
                                    <div class="col-md-4"><label class="radio-inline"><input type="radio" name="user_gender" value="Others">
                                            {{__('user.others')}}</label></div>
                                </div>
                            </div>
                            <div class="form-group" {{ $errors->has('password') ? 'has-error' : '' }}>
                                <label for="password"><i class="fa fa-key"></i>&nbsp {{__('user.password')}}</label>
                                <input type="password" id="password" name="password" class="form-control">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('confirm_password') ? 'has-error' : '' }}>
                                <label for="confirm_password"><i class="fa fa-key"></i>&nbsp {{__('user.confirm_password')}}</label>
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group row">
                                <div class="col-6">
                                    <a href="{{url('donor/home')}}" class="btn form-control btnCancel">{{__('user.reg_cancel')}}</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn form-control btnSave">{{__('user.reg_save')}}</button>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                {{__('user.have_account')}} <a id="login" href="{{url('people/login')}}" style="text-decoration: none">{{__('user.login')}}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop

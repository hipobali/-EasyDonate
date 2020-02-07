@extends('layouts.app')
@section('title')
    Foundation SingUp
@stop
@section('content')

    <div class='container'>
        <div class="row">
            <div class="col-md-6 left_side" >
                <div class="text_point ">
                    <img src="{{asset('img/left_kanote.png')}}" class="left_kanote" style="vertical-align: middle">
                    <h3 style="color: hsl(35,100%,50%); margin-top: 20%">&nbsp;{{__('foundation.register_account')}}&nbsp;</h3>
                    <img src="{{asset('img/right_kanote.png')}}" class="right_kanote" style="vertical-align: middle">
                </div>
                <p class="col-sm " style="margin-top:10%;">
                    <strong>
                    "{{__('foundation.reg_quote1')}}<br>
                    {{__('foundation.reg_quote2')}}<br>
                    {{__('foundation.reg_quote3')}}<br>
                    {{__('foundation.reg_quote4')}}<br>
                    {{__('foundation.reg_quote5')}}<br>
                    {{__('foundation.reg_quote6')}}"<br>
                    </strong>
                    <br>
                    <i><b>--{{__('foundation.reg_writer')}}--</b></i>
                </p>
                <img class="pp img-fluid " src="{{asset('img/pp.png')}}" style="margin-top: 100px;">
            </div>

            <div class="col-md-6  ">
                <div class=" card  box-shadow f_card">
                    <form method="post" action="{{route('foundation_register')}}" enctype="multipart/form-data">
                        <div class="card-header text-center">
                            <div class="image_upload">
                                <img class=" user_profile card-img " src="{{asset('img/camera9.png')}}" >
                                <div class="camera">
                                    <label class="btn" style="color:white;">
                                        <div class="text">
                                            <b>{{__('foundation.upload')}}<br>
                                               {{__('foundation.profile')}}<br>
                                               {{__('foundation.picture')}}
                                            </b>
                                        </div>
                                        <input type="file" class="img-upload {{$errors->has('foundation_profile') ? 'has-error':''}} " name="foundation_profile" value="{{ old('foundation_profile') }}"  style="display: none;">
                                    </label>
                                </div>
                            </div>
                            <h3>{{__('foundation.register_form')}}</h3>
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

                            <span class="text-danger">{{$errors->first('foundation_profile')}}</span>

                            <div class="form-group">
                                <label for="foundation_name" class=" f_name"><span class="fa fa-users "></span>&nbsp {{__('foundation.foundation_name')}} </label>
                                <input type="text" name="foundation_name" id="foundation_name" value="{{ old('foundation_name') }}" class="form-control form-control-sm {{$errors->has('foundation_name') ? 'has-error':''}} ">
                                <span class="text-danger">{{$errors->first('foundation_name')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="founder"><span class="fa fa-user-tie "></span>&nbsp {{__('foundation.founder')}}</label>
                                <input type="text" name="founder" id="founder" value="{{ old('founder') }}" class="form-control form-control-sm {{$errors->has('founder') ? 'has-error':''}}" >
                                <span class="text-danger">{{$errors->first('founder')}}</span>
                            </div>

                            <div class="form-group">
                                <label><span class="fa fa-calendar-alt "></span>&nbsp {{__('foundation.founded_date')}}</label>
                                <div class="row">

                                    <div class="col-4 col-sm-4">
                                        <select value="{{ old('year_picker') }}" name="year_picker" id="year_picker" class="form-control form-control-sm {{$errors->has('year_picker') ? 'has-error':''}}">
                                            @for($i = 1990; $i < date('Y') + 10; $i++ )
                                                <option value="{{ $i }}" @if($i == date('Y')) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                        <span class="text-danger">{{$errors->first('year_picker')}}</span>
                                    </div>

                                    <div class="col-4 col-sm-4">
                                        @php
                                            $months = [
                                                'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
                                            ];
                                        @endphp
                                        <select value="{{ old('month_picker') }}" name="month_picker" id="month_picker" class="form-control form-control-sm {{$errors->has('month_picker') ? 'has-error':''}}">
                                            @foreach($months as $key => $val)
                                                <option value="{{ $key }}" @if(date('m') - 1 == $key) selected @endif>{{ $val }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{$errors->first('month_picker')}}</span>
                                    </div>

                                    <div class="col -4 col-sm-4">
                                        <select value="{{ old('day_picker') }}" name="day_picker" id="day_picker" class=" form-control form-control-sm {{$errors->has('day_picker') ? 'has-error':''}}"></select>
                                        <span class="text-danger">{{$errors->first('day_picker')}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email"><span class="fa fa-envelope"></span>&nbsp {{__('common.email')}}</label>
                                <input placeholder="........@gmail.com" type="text" name="email" id="email" value="{{ old('email') }}" class="form-control form-control-sm {{$errors->has('email') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="address"><span class="fa fa-home"></span>&nbsp {{__('foundation.address')}}</label>
                                <textarea id="address" name="address" class="form-control form-control-sm {{$errors->has('address') ? 'has-error':''}}" >{{ old('address') }}</textarea>
                                <span class="text-danger">{{$errors->first('address')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="phone"><span class="fa fa-phone"></span>&nbsp {{__('foundation.foundation_phone')}}</label>
                                <input type="text" id="phone" name="phone"  value="{{ old('phone') }}" placeholder="09*********" class="form-control form-control-sm {{$errors->has('phone') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('phone')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="president_name"><span class="fa fa-user"></span> &nbsp {{__('foundation.president_name')}}</label>
                                <input type="text" id="president_name" name="president_name" value="{{ old('president_name') }}" class="form-control form-control-sm {{$errors->has('president_name') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('president_name')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="foundation_certificate"><span class="fa fa-certificate"></span> &nbsp{{__('foundation.foundation_certificate')}}</label>
                                <input type="file" id="foundation_certificate" name="foundation_certificate" value="{{ old('foundation_certificate') }}" class="certificate_file form-control form-control-sm {{$errors->has('foundation_certificate') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('foundation_certificate')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="member_count"><span class="fa fa-users-cog"></span> &nbsp {{__('foundation.member_count')}}</label>
                                <input type="number" id="member_count" name="member_count" value="{{ old('member_count') }}" class="form-control {{$errors->has('member_count') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('member_count')}}</span>
                            </div>

                            <div class="form-group">
                                <label id="password"><span class="fa fa-key"></span> &nbsp {{__('foundation.password')}} </label>
                                <input type="password" id="password"  name="password" class="form-control form-control-sm {{$errors->has('password') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('password')}}</span>
                            </div>

                            <div class="form-group">
                                <label id="confirm_password"><span class="fa fa-key"></span> &nbsp{{__('foundation.confirm_password')}}</label>
                                <input type="password" id="confirm_password"  name="confirm_password" class="form-control form-control-sm {{$errors->has('confirm_password') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="form-group row">
                                <div class="col-6">
                                    <a  href="{{url('donor/home')}}" class="btn form-control btn_register2">{{__('foundation.reg_cancel')}}</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn_register1 form-control" >{{__('foundation.reg_save')}}</button>
                                </div>
                            </div>
                            <div class="account_login_link">
                                {{__('foundation.have_account')}} <a href="{{url('foundation/login')}}" style="text-decoration: none">{{__('foundation.login')}}</a>
                            </div>

                        </div>
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script>
        for (i = new Date().getFullYear(); i > 1900; i--)
        {
            $('#year_picker').append($('<option />').val(i).html(i));
        }
        for (i = 1; i <= 31 ; i++){
            $('#day_picker').append($('<option />').val(i).html(i));
        }
    </script>
@stop

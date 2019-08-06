@extends('layouts.app')
@section('title')
    Foundation SingUp
@stop
@section('content')
    <link href="{{asset('css/foundation_signUp.css')}}" rel="stylesheet">
    <script src="{{asset('js/foundation.js')}}"></script>
    <div class='container'>
        <div class="row">
            <div class="col-md-6 left_side" >
                <h1 style="margin-top:20%;">Let's Join With Us</h1>

                <p class="col-sm " style="margin-top:10%;"><strong>
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
                <img class="pp img-fluid " src="../../../img/pp.png" style="margin-top: 100px;">
            </div>
            <div class="col-md-6  ">
                <div class=" card  box-shadow f_card">
                    <form method="post" action="{{route('foundation_register')}}" enctype="multipart/form-data">
                        <div class="card-header text-center">
                            <div class="image_upload">
                                <img class=" user_profile card-img " src="../../../img/camera9.png" >
                                <div class="camera">
                                    <label class="btn" style="color:white;">
                                        <div class="text">
                                            <b>  Upload <br>
                                                profile<br>
                                                picture
                                            </b>
                                        </div>
                                        <input value="{{ old('username') }}" type="file" class="img-upload {{$errors->has('foundation_profile') ? 'has-error':''}} " name="foundation_profile" style="display: none;">
                                    </label>
                                </div>
                            </div>
                            <h3>Foundation SignUp </h3>
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
                                <label for="foundation_name" class=" f_name"><span class="fa fa-users "></span>&nbsp Foundation Name: </label>
                                <input value="{{ old('username') }}" type="text" name="foundation_name" id="foundation_name" class="form-control form-control-sm {{$errors->has('foundation_name') ? 'has-error':''}} ">
                                <span class="text-danger">{{$errors->first('foundation_name')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="founder"><span class="fa fa-user-tie "></span>&nbsp Founder:</label>
                                <input value="{{ old('username') }}" type="text" name="founder" id="founder" class="fa fa-users form-control form-control-sm {{$errors->has('founder') ? 'has-error':''}}" >
                                <span class="text-danger">{{$errors->first('founder')}}</span>
                            </div>
                            <div class="form-group">
                                <label><span class="fa fa-calendar-alt "></span>&nbsp Founded date(yy/mm/dd): </label>
                                <div class="row">
                                    <div class="col-4 col-sm-4">
                                        <select value="{{ old('username') }}" name="year_picker" id="year_picker" class="form-control form-control-sm {{$errors->has('year_picker') ? 'has-error':''}}">
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
                                        <select value="{{ old('username') }}" name="month_picker" id="month_picker" class="form-control form-control-sm {{$errors->has('month_picker') ? 'has-error':''}}">
                                            @foreach($months as $key => $val)
                                                <option value="{{ $key }}" @if(date('m') - 1 == $key) selected @endif>{{ $val }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{$errors->first('month_picker')}}</span>
                                    </div>
                                    <div class="col -4 col-sm-4">
                                        <select value="{{ old('username') }}" name="day_picker" id="day_picker" class=" form-control form-control-sm {{$errors->has('day_picker') ? 'has-error':''}}"></select>
                                        <span class="text-danger">{{$errors->first('day_picker')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email"><span class="fa fa-envelope"></span>&nbsp Email: </label>
                                <input value="{{ old('username') }}" placeholder="........@gmail.com" type="text" name="email" id="email" class="form-control form-control-sm {{$errors->has('email') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="address"><span class="fa fa-home"></span>&nbsp Address: </label>
                                <textarea value="{{ old('username') }}" type="text" id="address" name="address" class="form-control form-control-sm {{$errors->has('address') ? 'has-error':''}}" ></textarea>
                                <span class="text-danger">{{$errors->first('address')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="phone"><span class="fa fa-phone"></span>&nbsp Foundation Phone:</label>
                                <input value="{{ old('username') }}" type="text" id="phone" name="phone" placeholder="09*********" class="form-control form-control-sm {{$errors->has('phone') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('phone')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="president_name"><span class="fa fa-user"></span> &nbsp President Name:</label>
                                <input value="{{ old('username') }}" type="text" id="president_name" name="president_name" class="form-control form-control-sm {{$errors->has('president_name') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('president_name')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="foundation_certificate"><span class="fa fa-certificate"></span> &nbspFoundation Certificate:</label>
                                <input value="{{ old('username') }}" type="file" id="foundation_certificate" name="foundation_certificate" class="certificate_file form-control form-control-sm {{$errors->has('foundation_certificate') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('foundation_certificate')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="member_count"><span class="fa fa-users-cog"></span> &nbsp Member Count:</label>
                                <input value="{{ old('username') }}" type="number" id="member_count" name="member_count" class="form-control {{$errors->has('member_count') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('member_count')}}</span>
                            </div>
                            <div class="form-group">
                                <label id="password"><span class="fa fa-key"></span> &nbsp Password: </label>
                                <input value="{{ old('username') }}" type="password" id="password"  name="password" class="form-control form-control-sm {{$errors->has('password') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('password')}}</span>
                            </div>
                            <div class="form-group">
                                <label id="confirm_password"><span class="fa fa-key"></span> &nbspConfirm Password: </label>
                                <input value="{{ old('username') }}" type="password" id="password"  name="confirm_password" class="form-control form-control-sm {{$errors->has('confirm_password') ? 'has-error':''}}">
                                <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group row">
                                <div class="col-6">
                                    <a  href="{{url('donor/home')}}" class="btn form-control btn_register2">Cancel</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn_register1 form-control" >Save</button>
                                </div>
                            </div>
                            <div class="account_login_link">
                                Already have an account? <a href="{{url('foundation/login')}}" style="text-decoration: none">Login</a>
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

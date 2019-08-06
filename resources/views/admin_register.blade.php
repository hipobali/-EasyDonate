@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        @if(Session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{Session('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                            @if(Session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{Session('error')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        <form method="post" action="{{route('admin_register')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                        <input id="name" type="text" class="form-control {{$errors->has('name') ? 'has-error':''}}" name="name" value="{{ old('name') }}">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control {{$errors->has('email') ? 'has-error':''}}" name="email" value="{{ old('email') }}">
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="secret" class="col-md-4 col-form-label text-md-right">{{ __('secret') }}</label>
                                <div class="col-md-6">
                                    <input id="secret" type="password" class="form-control {{$errors->has('secret') ? 'has-error':''}}" name="secret">
                                    <span class="text-danger">{{$errors->first('secret')}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control {{$errors->has('password') ? 'has-error':''}}" name="password" >
                                    <span class="text-danger">{{$errors->first('password')}}</span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control {{$errors->has('secret') ? 'has-error':''}}" name="password_confirm" >
                                    <span class="text-danger">{{$errors->first('password_confirm')}}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

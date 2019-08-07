@extends('layouts.app')
@extends('layouts.nav')
@section('content')
    <link href="{{ asset('css/user_post.css')}}" rel="stylesheet">
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
    <div class="stars"></div>
    <div class="twinkling"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="text-light txt">{{__('user.project_summary')}}</h2>
                <div class="divider">
                    <span></span>
                    <span><i class="fa fa-star"></i> </span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-shadow card-mg">
                    <div class="card-header">
                        <h5 class="txt">
                            {{__('user.please_fill')}}
                        </h5>
                    </div>
                    <form class="form-mg" method="post" action="{{route('user_post_form',Auth::user()->id)}}" enctype="multipart/form-data">
                        <div class="card-body">
                            @if(Session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{Session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group" {{ $errors->has('title') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/one.png') }} class="digit-size">
                                <label for="title">&nbsp;{{__('user.title')}}</label>
                                <select name="title" class="form-control request_textarea"  required>
                                    <option>Orphan</option>
                                    <option>Old Age Home</option>
                                    <option>Disabled Peoples</option>
                                    <option>Education</option>
                                    <option>Funeral</option>
                                    <option>Religious</option>
                                    <option>Urgent</option>
                                    <option>Others</option>



                                </select>
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('location') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/two.png') }} class="digit-size">
                                <label for="location">&nbsp;{{__('user.location')}}</label>
                                <input type="text" name="location" id="location" class="form-control" value="{{old('location')}}">
                                <span class="text-danger">{{ $errors->first('location') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('name') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/three.png') }} class="digit-size">
                                <label for="name">&nbsp;{{__('user.applicant_name')}}</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('items-requested') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/four.png') }} class="digit-size">
                                <label for="items-requested">&nbsp;{{__('user.items_requested')}}</label>
                                <textarea class="form-control" name="items-requested" id="items-requested" rows="3">{!! old('items-requested') !!} </textarea>
                                <span class="text-danger">{{ $errors->first('items-requested') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('cost') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/five.png') }} class="digit-size">
                                <label for="cost">&nbsp;{{__('user.cost')}}</label>
                                <input type="text" name="cost" id="cost" class="form-control" value="{{old('cost')}}">
                                <span class="text-danger">{{ $errors->first('cost') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('significance') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/six.png') }} class="digit-size">
                                <label for="significance">&nbsp;{{__('user.significance')}}</label>
                                <textarea class="form-control" name="significance" id="significance" rows="3" >{!! old('significance') !!} </textarea>
                                <span class="text-danger">{{ $errors->first('significance') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('phone') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/seven.png') }} class="digit-size">
                                <label for="phone">&nbsp;{{__('user.phone')}}</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/eight.png') }} class="digit-size">
                                <label for="image">&nbsp;{{__('user.choose_image')}}</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input form-control" id="image" name="image">
                                    <label class="custom-file-label form-control">{{__('user.choose_file')}}</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            </div>
                            <div class="form-group" {{ $errors->has('remark') ? 'has-error' : '' }}>
                                <img src={{ asset('img/digits/nine.png') }} class="digit-size">
                                <label for="remark">&nbsp;{{__('user.remark')}}</label>
                                <input type="text" name="remark" id="remark" class="form-control" value="{{old('remark')}}">
                                <span class="text-danger">{{ $errors->first('remark') }}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group row justify-content-center">
                                <div class="col-6 col-md-4">
                                    <a  href="/home" class="btn form-control btn-danger">
                                        {{__('user.cancel')}} &nbsp
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                                <div class="col-6 col-md-4">
                                    <button type="submit" class="btn form-control btn-primary">
                                        {{__('user.send')}} &nbsp
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <p class="font-weight-bold tip">
                    <img src="/img/light.png" class="img-light">
                    {{__('user.note')}}
                </p>
            </div>
        </div>
    </div>
    <script>
        // to appear the name of the file on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection


@extends('layouts.app')
@extends('layouts.nav')
@section('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/Bootstrap_Helpers/winmarkltd-BootstrapFormHelpers-d6770e0/dist/css/bootstrap-formhelpers.css')}}">
    <link rel="stylesheet" href="{{asset('css/reportForm.css')}}}">
    <link rel="stylesheet" href="{{asset('css/request.css')}}}">

    <body class="f_body ">
    <div class="container-fluid " style="padding-top: 3vw;">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group request_list position-fixed ">
                    <a href="#" id="showhidePeopleInNeed/showhideDonor" style="text-decoration: none" class="item1 list-group-item"><span>All</span>&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    <a href="#" id="showhideDonor" style="text-decoration: none" class="item2 list-group-item"><span>Request from donor</span>&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    <a href="#" id="showhidePeopleInNeed"  style="text-decoration: none" class="item3 list-group-item"><span>Request from people in need</span> &nbsp;<i class="fa fa-arrow-circle-right"></i></a>

                </div>
            </div>
            <div class="col-md-5 ">

                @foreach($user_post as $user_posts)
                <!-- Card -->

                    <div class="card card2 promoting-card" style="margin-bottom: 30px; border-radius: 10px;" id="peopleInNeedCard">
                        <!-- Card content -->
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-6 d-flex flex-row">
                                    <!-- Avatar -->
                                    <a  data-toggle="modal" data-target="#exampleModal{{$user_posts->people->id}}">  <img src="{{route('getUserProfile',[$user_posts->people->user_profile])}}" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar"></a>
                                    <!-- Content -->
                                    <div>
                                        <!-- Title -->
                                        <a  data-toggle="modal" data-target="#exampleModal{{$user_posts->people->id}}"> <h4 class="card-title font-weight-bold mb-2">{{$user_posts->user->name}}</h4></a>
                                        <!-- Subtitle -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$user_posts->people->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Your Profile</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Card -->
                                                        <div class="card testimonial-card" style="background-color:lightgoldenrodyellow">
                                                            <!-- Background color -->
                                                            <div class="card-up indigo lighten-1"></div>

                                                            <!-- Avatar -->
                                                            <div class="avatar mx-auto white mt-3">
                                                                <img  src="{{route('get_user_profile',[$user_posts->people->user_profile])}}" class="rounded-circle" height="auto" width="200" alt="woman avatar">
                                                            </div>
                                                            <!-- Content -->
                                                            <div class="card-body">
                                                                <!-- Name -->
                                                                <h4 class="card-title"><i class="fa fa-user-alt "></i>&nbsp;{{$user_posts->user->name}}</h4>
                                                                <hr>
                                                                <!-- Quotation -->
                                                                <p><i class="fas fa-envelope"></i>&nbsp; {{$user_posts->user->email}}</p>
                                                                <p><i class="fas fa-map-marked"></i> &nbsp;{{$user_posts->people->address}}</p>
                                                                <p><i class="fas fa-phone"></i>&nbsp; {{$user_posts->people->phone}}</p>
                                                            </div>

                                                        </div>
                                                        <!-- Card -->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text"><i class="far fa-clock pr-2"></i>{{$user_posts->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 float-right">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle float-right" href="#" id="Dropdown" role="button" data-toggle="modal" data-target="#reportFormModal{{$user_posts->id}}" aria-haspopup="true" aria-expanded="false" style="text-decoration: none">
                                            Report
                                        </a>
                                    </div>
                                    <!-- report modal -->
                                    <div class="modal fade" id="reportFormModal{{$user_posts->id}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{route('report_form',$user_posts->id)}}" method="post">
                                                @csrf
                                                <div class="modal-content"  style="width:105%">
                                                    <div class="modal-header" style="background: #dba904;">
                                                        <h5 class="modal-title" id="exampleModalLabel">Report Form</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="foundationName">Foundation Name: </label>
                                                            <input type="text" name="name" class="form-control" id="name" value="{{Auth::user()->name}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="foundationOption">Why you want to report this post?</label><br>
                                                            <div class=" custom-radio">
                                                                <input type="radio" id="reportingOptions1" name="option" value="irrelevant" checked>
                                                                <label for="reportingOptions1">irrelevant</label>
                                                            </div>
                                                            <div class=" custom-radio">
                                                                <input type="radio" id="reportingOptions2" name="option" value="fake_post">
                                                                <label for="reportingOptions2">fake post</label>
                                                            </div>
                                                            <div class=" custom-radio">
                                                                <input type="radio" id="reportingOptions3" name="option" value="already_completed">
                                                                <label for="reportingOptions3">already completed</label>
                                                            </div>
                                                            <div class=" custom-radio">
                                                                <input type="radio" id="reportingOptions4" name="option" value="others">
                                                                <label for="reportingOptions4">others</label>
                                                            </div>
                                                            <div class="form-group" id="toggleTextarea" style="display: none;">
                                                                <textarea class="form-control" rows="5" id="reportingReason" name="otherOptions"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="background: #dba904;">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Report</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top rounded-0" src="{{route('get_user_post_image',[$user_posts->image])}}" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card-body people_card text-center">
                            <div class="collapse-content">
                                <p class="mt-3"><img src="../../../img/house.svg" width="5%"> &nbsp;<strong> Location :</strong> &nbsp;{{$user_posts->location}}</p>
                                <p><img src="../../../img/idea.svg" width="5%"> &nbsp;<strong>  Item Requested :</strong> &nbsp;{{$user_posts->items_requested}}</p>
                                <p><img src="../../../img/rich.svg" width="5%"> &nbsp;<strong>  Estimated Costs :</strong> &nbsp;{{$user_posts->cost}}</p>
                                <p><img src="../../../img/star.svg" width="5%"> <strong> Significance of the project :</strong> &nbsp;{{$user_posts->significance}}</p>
                                <p><img src="../../../img/phone.svg" width="5%">&nbsp;<strong>  Phone :</strong> &nbsp;{{$user_posts->phone}}</p>
                                <p><img src="../../../img/edit.svg" width="5%">&nbsp;<strong>  remark :</strong> &nbsp;{{$user_posts->remark}}</p>
                            </div>
                            @foreach($foundationPost as $foundationPosts)
                                @if($foundationPosts->user_post_id==$user_posts->id)
                                    <p ><h5 style="color:darkred;">This post have been shared by foundation !</h5></p>
                                @endif
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-4 offset-4">
                                    <buttton class="myButton btn btn-block"  data-toggle="modal" data-target="#confirm{{$user_posts->id}}"><b>Confirm</b></buttton>
                                    <!-- Modal -->
                                    <div class="modal fade " id="confirm{{$user_posts->id}}" tabindex="-1" role="dialog" aria-labelledby="accept" aria-hidden="true" data-backdrop="true">
                                        <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Post About Donation</strong></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card request_card ">
                                                        <div class="card-header">
                                                            <img class="card-img-top rounded-0" src="{{route('get_user_post_image',[$user_posts->image])}}" alt="Card image cap">
                                                        </div>
                                                        <div class="card-body">
                                                            <form method="post" action="{{route('foundation_request_post',Auth::user()->id)}}" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <textarea rows="10" name="f_post_detail"  class="form-control request_textarea" required >
                                                                         We have already checked for this information ,We will fully take responsibility for this information.
                                                                          Item Requested :  &nbsp;{{$user_posts->items_requested}}
                                                                          Estimated Costs :  &nbsp;{{$user_posts->cost}}
                                                                          Significance of the project :  &nbsp;{{$user_posts->significance}}
                                                                          Phone :  &nbsp;{{$user_posts->phone}}
                                                                          remark :  &nbsp;{{$user_posts->remark}}
                                                                        </textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="user_post_id" value="{{$user_posts->id}}" style="display: none;">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="f_post_category" class="form-control request_textarea" placeholder="Write about donation details" required>
                                                                            <option>{{$user_posts->title}}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <button type="button" class="btn myButton btn-block" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <button type="submit" class="myButton btn btn-block" >Post</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                @endforeach

                    @foreach($donateForm as $donateForms)
                        @if($donateForms->donate_foundation==Auth::user()->name)
                            <div class="card donor_card card1 post_card" style="margin-bottom: 30px; border-radius: 10px;">
                                <div class="card-header" >
                                    <img src="../../../img/donate.png" style="width: 50px;height: 50px;" class="rounded-circle" >  Donor
                                    <a href="" type="button" class="fa fa-clock float-right"  style="color:goldenrod;">
                                        {{$donateForms->created_at->diffForHumans()}}
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p>Name::{{$donateForms->donor_name}}</p>
                                    <p>Phone::{{$donateForms->donor_ph_no}}</p>
                                    <p>Location::{{$donateForms->donor_location}}</p>
                                    <p>Address::{{$donateForms->donor_address}}</p>
                                    <p> Amount::{{$donateForms->donor_amount}}</p>
                                    <p>Option::{{$donateForms->donor_donationOption}}</p>
                                    <p>Posted date::{{$donateForms->donor_date}}</p>

                                </div>
{{--                                <div class="card-footer">--}}
{{--                                    <p id="showText1"></p>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-4 offset-4">--}}
{{--                                            <button id="btn_accept{{$donateForms->id}}" class="btn btn_accept myButton btn1 btn-block "  data-toggle="modal" data-target="#accept{{$donateForms->id}}"><b>Accept</b></button>--}}
{{--                                            <!-- Modal -->--}}
{{--                                            <div class="modal right fade " id="accept{{$donateForms->id}}" tabindex="-1" role="dialog" aria-labelledby="accept" aria-hidden="true" data-backdrop="true">--}}
{{--                                                <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header" >--}}
{{--                                                            <h4> Please Be Careful!</h4>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            <strong>Are you sure to take full responsible for this post??</strong>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <button type="button" class="btn myButton" data-dismiss="modal"><b>Cancel</b></button>--}}
{{--                                                            <button type="submit" id="accepted{{$donateForms->id}}" class="accepted btn myButton" data-dismiss="modal"><b>OK</b></button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Modal -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        @endif
                    @endforeach

            </div>
            <div class="col-md-4 mb-5">
                <div class="card request_card position-fixed">
                    <div class="card-header text-center"><strong>Post About Donation</strong></div>
                    <div class="card-body">
                        <form method="post" action="{{route('foundation_request_post',Auth::user()->id)}}" enctype="multipart/form-data">
                            <div class="form-group">
                                <textarea rows="8" name="f_post_detail"  class="form-control request_textarea" placeholder="Write about donation details" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="f_post_image" class="request_file form-control" required style=" padding-bottom: 3.3vw;">
                            </div>
                            <div class="form-group">
                                <select name="f_post_category" class="form-control request_textarea" placeholder="Write about donation details" required>
                                    @foreach($category as $categories)
                                        <option>{{$categories->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="myButton btn  btn-block" >Post</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="{{asset('Bootstrap_Helpers/winmarkltd-BootstrapFormHelpers-d6770e0/dist/js/bootstrap-formhelpers.js')}}"></script>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script src="donationForm.js"></script>
    <!-- js of report form modal -->
    <script type="text/javascript" src="reportForm.js"></script>
    <!-- js of report form modal -->

    <script type="text/javascript">
        @if (count($errors) > 0)
        $('#donationFormModal').modal('show');
        @endif
        @foreach($donateForm as $donateForms)
        $('#accepted{{$donateForms->id}}').click(function () {
            $('#btn_accept{{$donateForms->id}}').hide();
        });
       @endforeach
    </script>
    <script>
        $(document).ready(function(){
            $('.item1').click( function() {
                $(".card1").show(1000),
                    $(".card2").show(1000);
            });
            $('.item2').click( function() {
                $(".card1").show(1000),
                    $(".card2").hide(1000);
            });
            $('.item3').click( function() {
                $(".card2").show(1000),
                    $(".card1").hide(1000);
            });
            $('.ok_btn').click(function () {
                $(".donor_card").hide();
            });
        });
    </script>
@stop

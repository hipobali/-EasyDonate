@extends('layouts.app1')
@extends('layouts.nav')
@section('content')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title> @section('title')
            Home
        @endsection </title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcomeCss/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcomeCss/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal_for_details.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcomeCss/news.css')}}">
    <link rel="stylesheet" href="{{asset('css/btn.css')}}">
    </head>
    <body>
    <div id="news">
        <div class="news_mv ">
            <div class="mv_parent">
                <div class="mv_child">
                    <p>“We Rise By Lifting Others”</p>
                </div>
            </div>
        </div>

        <button class="to-top" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <div class="urgent">
            <div class="urgent_ttl">
                <h2 class="urgent_ttl_txt">{{__('common.urgent_need')}}</h2>
            </div>
            <div class="urgent_post_section">

                @foreach($foundation_post as $foundation_posts)
                    @if($foundation_posts->f_post_category=='Urgent')
                        <div class="urgent_content">
                            <div class="urgent_post">
                                <div class="urgent_photo">
                                    <div class="urgent_img">
                                        @if(is_null($foundation_posts->user_post_id))
                                            <img src="{{route('f_image_post',['foundation_post'=>$foundation_posts->f_post_image])}}" alt="Urgent_photo" width="234" height="200">
                                        @elseif($foundation_posts->user_post_id==$foundation_posts->userPost->id)
                                            <img src="{{route('confirm_user_post_image',[$foundation_posts->userPost->image])}}" alt="Urgent_photo" width="234" height="200">
                                        @endif
                                    </div>
                                </div>
                                <div class="urgent_txt">
                                    <div class="urgent_txt_ttl">
                                        <a data-toggle="modal" data-target="#exampleModal{{$foundation_posts->foundation_id}}">
                                            <img  class="foundation_people" src="{{route('getFoundationProfile',['foundation_post'=>$foundation_posts->foundation->foundation_profile])}}"  alt="people" width="50" height="50" style="border-radius: 30px;" >
                                        </a>
                                        <h4 >{{$foundation_posts->foundation->foundation_name}}</h4>

                                    </div>
                                    <p>
                                        {{str_limit($foundation_posts->f_post_detail,100) }}
                                    </p>
                                    <div>
                                        <div class="detail_btn">
                                            <a class="detail_link" data-toggle="modal" data-target="#exampleModal{{$foundation_posts->id}}" href="#" style="text-decoration: none" >{{__('common.detail')}} </a>
                                        </div>
                                        <div class="modal fade" id="exampleModalCenter{{$foundation_posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <img class="foundation_people" src="{{route('getFoundationProfile',['foundation_post'=>$foundation_posts->foundation->foundation_profile])}}"  alt="people" width="50" height="50" style="border-radius: 30px;" >
                                                        <h4 class="ml-2 mt-3" >{{$foundation_posts->foundation->foundation_name}}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img class="mb-4" src="{{route('f_image_post',['foundation_post'=>$foundation_posts->f_post_image])}}" width="465" height="240">
                                                        <p class="text-left">  {{$foundation_posts->f_post_detail}}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{route('get_donation_form',$foundation_posts->id)}}" type="button" class="btn btn-primary">Donate Now</a>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                @endforeach
            </div>
        </div>
        <div class="donation">
            <div class="donation_ttl">
                <h2 class="donation_ttl_txt">{{__('common.donation_list')}}</h2>
            </div>
            <div class="inner">
                <div class="btn_section">
                    <div class="dropdown foundation_dd">
                        <button class="foundation_btn">{{__('common.foundation_list')}}</button>
                        <div class="dropdown_menu">
                            <a href="{{route('donor_search_foundation',['id'=>0])}}" name="q">All</a>
                            @foreach($foundation as $foundations)
                                <a href="{{route('donor_search_foundation',[$foundations->id])}}" name="q">{{$foundations->foundation_name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="dropdown category_dd">
                        <button class="category_btn">{{__('common.category')}}</button>
                        <div class="dropdown_menu menu_margin">
                            @foreach($category as $categories)
                                <a href="{{route('donor_search_category',[$categories->category_name])}}" name="q">{{$categories->category_name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="donation_list">
                    <div class="donation_list_content ">
                        @foreach($foundation_post as $foundation_posts)
                            <div class="donation_data ">
                                <div class="donation_data_photo">
                                    @if($foundation_posts->user_post_id==0)
                                        <img src="{{route('f_image_post',['foundation_post'=>$foundation_posts->f_post_image])}}" width="260" height="240">
                                    @elseif($foundation_posts->user_post_id==$foundation_posts->userPost->id)
                                        <img src="{{route('confirm_user_post_image',[$foundation_posts->userPost->image])}}" width="260" height="240">
                                    @endif
                                    <p class="category_tab orphan">
                                        {{$foundation_posts->f_post_category}}
                                    </p>
                                </div>
                                <div class="donation_data_ttl">
                                    <a data-toggle="modal" data-target="#exampleModal{{$foundation_posts->foundation_id}}">
                                        <img  src="{{route('getFoundationProfile',['foundation_post'=>$foundation_posts->foundation->foundation_profile])}}" width="38" height="38">
                                    </a>
                                    <div class="modal fade" id="exampleModal{{$foundation_posts->foundation_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
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
                                                            <img  src="{{route('getFoundationProfile',[$foundation_posts->foundation->foundation_profile])}}" class="rounded-circle" height="auto" width="200" alt="woman avatar">
                                                        </div>
                                                        <!-- Content -->
                                                        <div class="card-body">
                                                            <!-- Name -->
                                                            <h4 class="card-title"><i class="fa fa-user-alt "></i>&nbsp;{{$foundation_posts->foundation->foundation_name}}</h4>
                                                            <hr>
                                                            <!-- Quotation -->
                                                            <form class="form-horizontal">
                                                                <div class="form-group row">
                                                                    <label class="col-4">{{__('common.email')}}</label>
                                                                    <p class="col-8"> :&nbsp;&nbsp;Email</p>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-4">{{__('common.president_name')}}</label>
                                                                    <p class="col-8"> :&nbsp;&nbsp;{{$foundation_posts->foundation->president_name}}</p>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-4">{{__('common.member_count')}}</label>
                                                                    <p class="col-8"> :&nbsp;&nbsp;{{$foundation_posts->foundation->member_count}}</p>
                                                                </div><div class="form-group row">
                                                                    <label class="col-4">{{__('common.address')}}</label>
                                                                    <p class="col-8"> :&nbsp;&nbsp;{{$foundation_posts->foundation->address}}</p>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-4">{{__('common.phone')}}</label>
                                                                    <p class="col-8"> :&nbsp;&nbsp;{{$foundation_posts->foundation->phone}}</p>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                    <!-- Card -->
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{route('get_donation_form',$foundation_posts->id)}}" type="button" class="btn btn-primary">Donate Now</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 >{{$foundation_posts->foundation->foundation_name}}</h4 >
                                </div>
                                <p class="txt_donation_post">{{str_limit($foundation_posts->f_post_detail,125)}}</p>
                                <div class="detail_btn">
                                    <a class="detail_link " href="" data-toggle="modal" data-target="#exampleModal{{$foundation_posts->id}}" style="text-decoration: none">{{(__('common.detail'))}}</a>
                                </div>
                                <div class="modal fade" id="exampleModal{{$foundation_posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img class="foundation_people" src="{{route('getFoundationProfile',['foundation_post'=>$foundation_posts->foundation->foundation_profile])}}"  alt="people" width="50" height="50" style="border-radius: 30px;" >
                                                <h4 class="ml-2 mt-3" >{{$foundation_posts->foundation->foundation_name}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if($foundation_posts->user_post_id==0)
                                                    <img class="mb-4" src="{{route('f_image_post',['foundation_post'=>$foundation_posts->f_post_image])}}" width="465" height="240">
                                                @elseif($foundation_posts->user_post_id==$foundation_posts->userPost->id)
                                                    <img class="mb-4" src="{{route('confirm_user_post_image',[$foundation_posts->userPost->image])}}" width="465" height="240">
                                                @endif
                                                <p class="text-left">  {{$foundation_posts->f_post_detail}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{route('get_donation_form',$foundation_posts->id)}}" type="button" class="btn btn-primary">Donate Now</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="pagination">
                    <a class="fs_ls" href="{{$foundation_post->url(1) }}" style="text-decoration: none">{{__('common.first')}}</a>
                    <a class="previous_left" href="{{ $foundation_post->previousPageUrl() }}" style="text-decoration: none">{{__('common.previous')}}</a>
                    @foreach(range(1,$foundation_post->lastPage()) as $i)
                        @if($i >=$foundation_post->currentPage() - 2 && $i <= $foundation_post->currentPage() + 2)
                            @if ($i == $foundation_post->currentPage())
                                <a class="pg_no"><span>{{ $i }}</span></a>
                            @else
                                <a href="{{ $foundation_post->url($i) }}">{{ $i }}</a>
                            @endif
                        @endif
                    @endforeach

                    <a class="next_right" href="{{ $foundation_post->nextPageUrl() }}" style="text-decoration: none">{{__('common.next')}}</a>
                    <a class="fs_ls" href="{{ $foundation_post->url($foundation_post->lastPage()) }}" style="text-decoration: none">{{__('common.last')}}</a>
                </div>
            </div>
        </div>
        <footer>
            <a class="logo" href="/">
                <img class="logo_img" src="{{asset('img/news_post/logo.png')}}" alt="">
            </a>
            <div class="footer_menu">
                <a href="/">{{__('common.home')}}</a><a href="#content_about">{{__('common.about')}}</a><a href="">{{__('common.contact')}}</a><a href="#content_terms">{{__('common.terms_and_conditions')}}</a>
            </div>
            <p class="txt_copyright">2019© All Rights Reserved. EasyDonateMyanmar.com</p>
            <div class="social_menu">
                <a href="https://www.facebook.com/လႉမယ္လြယ္လြယ္-107640630579396/?eid=ARC2LdA06F1AyHQq1mdN21B5l-UqxelPvIbCylgzcBKfmwfx4Mbyc-I0Z0qL0tuLCr9EkYdW9WAS7nPI">
                    <img src="{{asset('img/news_post/icon_fb.png')}}" alt="" width="42" height="42">
                </a>
                <a href="https://twitter.com/DonateEasy">
                    <img src="{{asset('img/news_post/icon_twitter.png')}}" alt="" width="42" height="42">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="{{asset('img/news_post/icon_ig.png')}}" alt="" width="42" height="42">
                </a>
            </div>
        </footer>
        <!-- end of footer -->
    </div>
    <script type="text/javascript" src="{{asset('js/welcomeJs/jquery.js')}}"></script>
    <script src="https://kit.fontawesome.com/85e4b02581.js"></script>
    <script type="text/javascript" src="{{asset('js/welcomeJs/slick.min.js')}}"></script>
    <script>
        $(document).ready(function() {

            // $("html").removeAttr('style');

            $(".drop_link").click(function() {
                if ($('.drop_link').hasClass('is_click')) {
                    $('.nav-dropdown').removeClass('show_drop');
                    $(this).removeClass('is_click');

                } else {
                    $(".drop_link").addClass("is_click");
                    $('.nav-dropdown').addClass('show_drop');
                };
            });
            $(".drop_link_login").click(function() {
                if ($('.drop_link_login').hasClass('is_click')) {
                    $('.nav-dropdown_login').removeClass('show_drop');
                    $(this).removeClass('is_click');

                } else {
                    $(".drop_link_login").addClass("is_click");
                    $('.nav-dropdown_login').addClass('show_drop');
                };
            });



            $(".btn_menu").click(function() {
                if ($('.btn_menu').hasClass('is_active')) {
                    $('.responsive_content').removeClass('show');
                    $(this).removeClass('is_active');

                } else {
                    $(".btn_menu").addClass("is_active");
                    $('.responsive_content').addClass('show');
                }

            });
            $('.urgent_post_section').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 1000,
                responsive: [{
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,

                    }
                },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ],
                prevArrow: "<img class='a-left control-c prev slick-prev' src='../../../img/news_post/slider_arrow_left.png' width='48' height='48'>",
                nextArrow: "<img class='a-right control-c next slick-next' src='../../../img/news_post/slider_arrow_right.png'>"
            });
        });
    </script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
    </body>
@stop

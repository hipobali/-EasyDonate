<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('js/welcomeJs/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/welcomeJs/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcomeCss/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcomeCss/home.css')}}">
    <link rel="stylesheet" href="{{asset('fa/css/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Padauk:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/btn.css')}}">
</head>
<body>
<div id="home">
    <div class="topnav ">
        <a href=""><img src="../../../img/logo_aa.png" width="50px" height=""></a>
        <div class="topnav-right only_pc">
            <a href="#content_news">{{ __('common.news') }}</a>
            <a href="#content_about">{{ __('common.about') }}</a>
            <a href="#content_contact">{{ __('common.contact') }}</a>
            <a href="#content_terms">{{ __('common.terms_and_conditions') }}</a>
            <a href="{{url('locale/en')}}" style="margin-right: 0"><img src="../../../img/flagEng.png" width="30px" height="30px">Eng</a>
            <a href="{{url('locale/mm')}}" style="margin-right: 0"><img src="../../../img/flagMyanmar.png" width="30px" height="30px">မြန်မာ  &nbsp;</a>
{{--            <a href="#" style="margin-right: 0"><img src="../../../img/flagJapan.png" width="30px" height="30px">日本 &nbsp;</a>--}}
        </div>
        <div class="responsive_nav only_sp">
            <div class="btn_menu">
                <div class="icon_menu">
                    <span></span>
                </div>
            </div>
            <div class="responsive_content only_sp">
                <a href="/">{{ __('common.news') }}</a>
                <a href="#content_about">{{ __('common.about') }}</a>
                <a href="#content_contact">{{ __('common.contact') }}</a>
                <a href="#content_terms">{{ __('common.terms_and_conditions') }}</a>
                <a href="{{url('locale/en')}}" style="padding-right: 0;margin-right: 0">English &nbsp;/</a>
                <a href="{{url('locale/mm')}}">မြန်မာ</a>
            </div>
        </div>
    </div>
    <button class="to-top" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div class="home_mv " >
        <div class="mv_content">
            <img src="img/finalshadowbannerccc.gif" data-src-sp="img/img_top_mv_sp.png" alt="">
            <div class="text_sec">
                <p class="txt_mv">WE RISE BY LIFTING OTHERS</p>
                <a class="mv_link  " href="{{route('donor_home')}}" title="">
                    {{__('welcome.get_started')}}
                </a>
            </div>

        </div>

    </div>
    <!-- end of main_virtual -->
    <div class="content">
        <div class="content_about" id="content_about">
            <div class="about_title">
                <img src="../../../img/left_kanote.png" class="left_kanote">
                <h3 class="about_title_text">About</h3>
                <img src="../../../img/right_kanote.png" class="right_kanote">
            </div>
            <div class="inner">

                <p class="txt_about">{{__('welcome.about1')}}<br>{{__('welcome.about2')}}<br>{{__('welcome.about3')}}</p>
                <p class="ttl_news" id="content_news">{{__('common.news')}}</p>

            </div>

            <ul class="news_list">
                @foreach($foundationPost as $foundationPosts)
                <li class="news">
                    <div class="img_news">
                        @if(is_null($foundationPosts->user_post_id))
                            <img src="{{route('f_image_post',['foundation_post'=>$foundationPosts->f_post_image])}}" alt="Urgent_photo" width="234" height="200">
                        @elseif($foundationPosts->user_post_id==$foundationPosts->userPost->id)
                            <img src="{{route('confirm_user_post_image',[$foundationPosts->userPost->image])}}" alt="Urgent_photo" width="234" height="200">
                        @endif
                        <div class="txt_date">{{$foundationPosts->created_at}}</div>
                    </div>
                    <div class="txt_news">
                        <p>  {{str_limit($foundationPosts->f_post_detail,100) }}</p>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <!-- end of about -->
        <div class="content_contact" id="content_contact">
            <div class="contact_title">
                <img src="../../../img/left_kanote.png" class="left_kanote">
                <h3 class="contact_title_text">Contact</h3>
                <img src="../../../img/right_kanote.png" class="right_kanote">
            </div>
            <div class="contact inner">
                <div class="address">
                    <img src="img/icon_address.png" alt="" width="78" height="98">
                    <div class="contact_box">
                        <p>{{__('common.address1')}}<br>{{__('common.address2')}}</p>
                    </div>
                </div>
                <div class="phone">
                    <img src="img/icon_phone.png" alt="" width="78" height="98">
                    <div class="contact_box">
                        <p>
                            <a href="tel:+959960005016"> {{__('common.phone1')}} </a>,
                            <a href="tel:+959256137059"> {{__('common.phone2')}} </a> ,<br>
                            <a href="tel:+959769196759"> {{__('common.phone3')}} </a> ,
                            <a href="tel:+959797911982"> {{__('common.phone4')}} </a> ,
                            <a href="tel:+959954499492"> {{__('common.phone5')}} </a>
                        </p>
                    </div>
                </div>
                <div class="mail">
                    <img src="img/icon_mail.png" alt="" width="78" height="98">
                    <div class="contact_box">
                        <p><a href="mailto:easydonatemyanmar@gmail.com"> easydonatemyanmar@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of contact -->
        <div class="content_terms" id="content_terms">
            <div class="terms_title">
                <img src="../../../img/left_kanote.png" class="left_kanote">
                <h3 class="terms_title_text">Terms and Conditions</h3>
                <img src="../../../img/right_kanote.png" class="right_kanote">
            </div>
            <div class="inner">
                <p class="txt_terms">{{__('term_condition.paragraph1')}}<br>{{__('term_condition.paragraph2')}}</p>
                <div class="txt_terms_content">
                    <h3 class="ttl_people">{{__('common.people_in_need')}}</h3>
                    <p class="txt_need">{{__('term_condition.people_tc1')}}</p>
                    <p class="txt_need">{{__('term_condition.people_tc2')}}</p>
                    <p class="txt_need">{{__('term_condition.people_tc3')}}</p>
                    <hr>
                    <!-- end of people_in_need -->
                    <h3 class="ttl_people">{{__('common.non_profit_organization')}}</h3>
                    <p class="txt_need">{{__('term_condition.organization_tc1')}}</p>
                    <p class="txt_need">{{__('term_condition.organization_tc2')}}</p>
                    <p class="txt_need">{{__('term_condition.organization_tc3')}}</p>
                    <p class="txt_need">{{__('term_condition.organization_tc4')}}</p>
                    <p class="txt_need">{{__('term_condition.organization_tc5')}}</p>
                    <hr>
                    <!-- end of non-profit-organization -->
                    <h3 class="ttl_people">{{__('common.visitor')}}</h3>
                    <p class="txt_need">{{__('term_condition.donor_tc1')}}</p>
                    <p class="txt_need">{{__('term_condition.donor_tc2')}}</p>
                    <p class="txt_need">{{__('term_condition.donor_tc3')}}</p>
                    <!-- end of visitor -->
                </div>
            </div>
        </div>
        <!-- end of terms and conditions -->
    </div>
    <!-- end of content -->
    <footer>
        <a class="logo" href="/" >
            <img src="../../../img/logo_aa.png" width="50px" height="">
            <!-- <img src="img/logo.png" alt="" width="260" height="20"> -->
        </a>
        <div class="footer_menu">
            <a href="#">{{__('common.news')}}</a><a href="#content_about">{{__('common.about')}}</a><a href="#content_contact">{{__('common.contact')}}</a><a href="#content_terms">{{__('common.terms_and_conditions')}}</a>
        </div>
        <p class="txt_copyright">2019© All Rights Reserved. EasyDonateMyanmar.com</p>
        <div class="social_menu">
            <a href="#"><img src="img/icon_fb.png" alt="" width="42" height="42"></a><a href="#"><img src="img/icon_twitter.png" alt="" width="42" height="42"></a><a href="#"><img src="img/icon_ig.png" alt="" width="42" height="42"></a>
        </div>
    </footer>
    <!-- end of footer -->
</div>
<script src="{{asset('bst/js/jquery.js')}} "></script>
<script type="text/javascript" src="{{asset('js/welcomeJs/slick.min.js')}}"></script>
<script src="{{asset('js/welcomeJs/common.js')}}"></script>
<script src="{{asset('js/welcomeJs/home.js')}}"></script>
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
</html>

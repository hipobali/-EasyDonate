
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('js/welcomeJs/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/welcomeJs/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcomeCss/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcomeCss/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/btn.css')}}">
</head>
<body>
<div id="home">
    <div class="topnav ">
        <a href=""><img src="../../../img/logo_aa.png" width="50px" height=""></a>
        <div class="topnav-right only_pc">
            <a href="/">News</a>
            <a href="#content_about">About</a>
            <a href="#content_contact">Contact</a>
            <a href="#content_terms">Terms and Conditions</a>
        </div>
        <div class="responsive_nav only_sp">
            <div class="btn_menu">
                <div class="icon_menu">
                    <span></span>
                </div>
            </div>
            <div class="responsive_content only_sp">
                <a href="" class="news">News</a>
                <a href="#content_about">About</a>
                <a href="#content_contact">Contact</a>
                <a href="#content_terms">Terms and Conditions</a>
            </div>
        </div>
    </div>
    <button class="to-top" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div class="home_mv " >
        <div class="mv_content">
            <img src="img/img_top_mv.png" data-src-sp="img/img_top_mv_sp.png" alt="">
            <div class="text_sec">
                <p class="txt_mv">“We Rise By Lifting Others”</p>
                <a class="mv_link" href="{{route('donor_home')}}" title="">Get Started</a>
            </div>
        </div>
    </div>
    <!-- end of main_virtual -->
    <div class="content">
        <div class="content_about" id="content_about">
            <div class="inner">
                <p class="txt_about">Easy-Donate Website is the website that grouped many foundations in one place to access easily.<br>We expected this website will be useful for<br>the people who want to request for help and for the people who want to donate. </p>
                <p class="ttl_news">NEWS</p>
            </div>
            <ul class="news_list">
                <li class="news">
                    <div class="img_news">
                        <img src="img/img_news.png" alt="news" width="296" height="258">
                        <div class="txt_date">2019.07.01</div>
                    </div>
                    <div class="txt_news">
                        <p>Title of request title of request title of Request title of request</p>
                    </div>
                </li>
                <li class="news">
                    <div class="img_news">
                        <img src="img/img_news.png" alt="news" width="296" height="258">
                        <div class="txt_date">2019.07.01</div>
                    </div>
                    <div class="txt_news">
                        <p>Title of request title of request title of Request title of request</p>
                    </div>
                </li>
                <li class="news">
                    <div class="img_news">
                        <img src="img/img_news.png" alt="news" width="296" height="258">
                        <div class="txt_date">2019.07.01</div>
                    </div>
                    <div class="txt_news">
                        <p>Title of request title of request title of Request title of request</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end of about -->
        <div class="content_contact" id="content_contact">
            <div class="contact inner">
                <div class="address">
                    <img src="img/icon_address.png" alt="" width="78" height="98">
                    <div class="contact_box">
                        <p>No.22, BaYintNaung(9) Street, Kamarkyi Road, ThinGankwin Township,<br>Yangon, Myanmar.</p>
                    </div>
                </div>
                <div class="phone">
                    <img src="img/icon_phone.png" alt="" width="78" height="98">
                    <div class="contact_box">
                        <p>
                            <a href="tel:+959960005016"> 09-960005016 </a>,
                            <a href="tel:+959256137059"> 09-256137059 </a> ,<br>
                            <a href="tel:+959769196759"> 09-769146759 </a> ,
                            <a href="tel:+959797911982"> 09-797911982 </a> ,
                            <a href="tel:+959954499492"> 09-954499492 </a>
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
            <div class="inner">
                <p class="txt_terms">Please read these terms and policy before using our websites. These terms apply to all users<br>who access or use the Service. (Visitors, Non-profit Organization and People-in-needs who want to post request)</p>
                <div class="txt_terms_content">
                    <h3 class="ttl_people">People-in-need</h3>
                    <p class="txt_need"> People-in-need (user who want to post the request) must have to register. </p>
                    <p class="txt_need">To register, people-in-need must have to fill the registeration form correctly.</p>
                    <p class="txt_need">To post the request about needed area, please post the information with statements (photos or videos).</p>
                    <hr>
                    <!-- end of people_in_need -->
                    <h3 class="ttl_people">Non-Profit Organization</h3>
                    <p class="txt_need"> The organization must have to register.</p>
                    <p class="txt_need">To register, the organization has to add the count of members and founded year to determine the foundation is real or fake.</p>
                    <p class="txt_need">Before accepting the request from the people-in-need, please read carefully the information of that people-in-need (After accepting the request, the foundation cannot cancle or deny the request)</p>
                    <p class="txt_need">Every post that uploaded to the websites by ‘A Organization’ have to take fully responsibility by the‘A Organization’.</p>
                    <p class="txt_need">Every post that uploaded to the websites by ‘A Organization’ have to take fully responsibility by the ‘A Organization’.</p>
                    <p class="txt_need">Please enter the registration certificate, or allowance of the authority.</p>
                    <hr>
                    <!-- end of non-profit-organization -->
                    <h3 class="ttl_people">Visitor</h3>
                    <p class="txt_need">Visitor(Donor) do not need to register.</p>
                    <p class="txt_need">Donor can only see the post that accepted by non-profit organization.</p>
                    <p class="txt_need">Please do not click the donate button without responsibility.</p>
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
            <a href="#">News</a><a href="#content_about">About</a><a href="#content_contact">Contact</a><a href="#content_terms">Terms and Conditions</a>
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

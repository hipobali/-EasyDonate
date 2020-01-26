@extends('layouts.app1')
@if(Auth::user())
    @extends('layouts.nav')
@else
@extends('layouts.donor_nav')
    @endif
@section('content')
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- circle slider -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="{{asset('css/about_us/about_us.css')}}">
    <!-- circle slider -->
    <!-- each person info -->
    <link rel="stylesheet" href="{{asset('css/about_us/each_person_info.css')}}">
    <!-- each person info -->
    <!-- css for background div -->
    <link rel="stylesheet" href="{{asset('css/about_us/background_div.css')}}">
    <!-- css for background div -->

    <!-- javascript link for bootstrap -->
{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
    <!-- javascript link for bootstrap -->

    <!-- container -->
    <div class="container-fluid">

        <!-- purpose -->
        <div class="purpose">
            <div class="about_title">
                <img src="../../../img/left_kanote.png" class="left_kanote">
                <h4 class="about_title_text" style="color: hsl(35,100%,50%)">OUR MAIN PURPOSE</h4>
                <img src="../../../img/right_kanote.png" class="right_kanote">
            </div>
{{--            <h4 style="color: hsl(35,100%,50%)">OUR MAIN PURPOSE</h4>--}}
            <p>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; We want to serve for  the donor, the foundation and the people who needs help to be easily connected at the one place.
                In our website, the donor can directly donate to the foundation and the people-in-need can directly access to the foundation.
                In our website, we mainly divided into three main groups: foundations, donors, and people-in-need.
            </p>
            <hr>
        </div>
        <!-- purpose -->

        <!-- foundation -->
        <div class="foundation">
            <div class="row">
                <div class="col " style="text-align: center; width: 100%;">
                    <img src="{{asset('img/about_us/united_nations_organization.jpg')}}" alt="foundation image" width="75%"  style="border-radius: 10px; box-shadow: 30px 30px hsl(35,100%,50%);">
                </div>
                <div class="col " style="text-align: center;">
                    <h5 style="color: hsl(35,100%,50%)">Foundation</h5>
                    <p>
                        By using our website, the foundation can know which regions, which parts, and whose people are need help in the form posted by the people in need. So, the foundation can join those people easily.
                        Also, the foundation can request help as the delegation of the people in needs to the donor.
                        Moreover, the foundation can review their post.
                    </p>
                    <hr>
                </div>
            </div>
        </div>
        <!-- foundation -->

        <!-- people in need -->
        <div class="people_in_need">
            <div class="row">
                <div class="col" style="width: 100%;">
                    <img src="{{asset('img/about_us/people_in_need.jpg')}}" alt="foundation image" width="75%" style="border-radius: 10px; box-shadow: 30px 30px hsl(35,100%,50%);">
                </div>
                <div class="col">
                    <h5 style="color: hsl(35,100%,50%)">People In Need</h5>
                    <p>
                        In the side of people-in-need, they can request the help to the foundation via request form.
                    </p>
                    <hr>
                </div>
            </div>
        </div>
        <!-- people in need -->

        <!-- donor -->
        <div class="donor">
            <div class="row">
                <div class="col" style="width: 100%;">
                    <img src="{{asset('img/about_us/donor.jpg')}}" alt="foundation image" width="75%" style="border-radius: 10px; box-shadow: 30px 30px hsl(35,100%,50%);">
                </div>
                <div class="col">
                    <h5 style="color:hsl(35,100%,50%);">Donor</h5>
                    <p>
                        The donor can see what donation can be donated in our websites.
                        In addition, the donor can donate money to the foundation for what they want to help.
                        Moreover, the donor can donate not only with Burmese currency, kyats but also with any currencies, all around the world.
                    </p>
                    <hr>
                </div>
            </div>
        </div>
        <!-- donor -->

        <!-- our developer team -->
        <!-- for each person -->
        <h5 style="margin: 0 auto; color: hsl(35,100%,50%)">Our Developer Team</h5>
        <hr style="width: 50%; margin-bottom: 2.5%;">
        <div class="alignment">
            <figure class="snip1566">
                <img src="{{asset('img/about_us/thet_htar_wai.jpg')}}" alt="sq-sample14" />
                <figcaption>
                    <div>Thet Htar Wai</div>
                    <div>TUM</div>
                    <div>Sixth Year</div>
                    <div>Frontend Designer</div>
                </figcaption>
                <a href="#"></a>
            </figure>
            <figure class="snip1566">
                <img src="{{asset('img/about_us/phoo_moh.jpg')}}" alt="sq-sample19" />
                <figcaption>
                    <div>Phoo Moh Moh</div>
                    <div>TUM</div>
                    <div>Sixth Year</div>
                    <div>Frontend Designer</div>
                </figcaption>
                <a href="#"></a>
            </figure>
            <figure class="snip1566">
                <img src="{{asset('img/about_us/kay_zin.jpg')}}" alt="sq-sample20" />
                <figcaption>
                    <div>Kay Zin Myo Thet Nyein</div>
                    <div>UCSM</div>
                    <div>Fifth Year</div>
                    <div>Backend Developer</div>
                </figcaption>
                <a href="#"></a>
            </figure>
            <figure class="snip1566">
                <img src="{{asset('img/about_us/de_naung_linn.jpg')}}" alt="sq-sample20" />
                <figcaption>
                    <div>De Naung Linn</div>
                    <div>UCST</div>
                    <div>Fifth Year</div>
                    <div>Backend Developer</div>
                </figcaption>
            </figure>
            <figure class="snip1566">
                <img src="{{asset('img/about_us/thet_tun_kyaw.jpg')}}" alt="sq-sample20" />
                <figcaption>
                    <div>Thet Tun Kyaw</div>
                    <div>UCSM</div>
                    <div>Fifth Year</div>
                    <div>Backend Developer</div>
                </figcaption>
            </figure>
        </div>
        <!-- for each person -->
        <!-- for group -->
        <div class="group" style="margin: 0 auto; text-align: center; padding-top: 4vw">
            <img src="{{asset('img/about_us/group.jpg')}}" alt="Group Photo" width="80%" style="border-radius: 40px; margin-bottom: 5%;">
        </div>
        <!-- for group -->
        <!-- our developer team -->

    </div>
    <!-- container -->

    <!-- footer -->
    <footer>
        <a class="logo" href="/">
            <img class="logo_img" src="{{asset('img/logo_aa.png')}}" alt="">
        </a>
        <div class="footer_menu">
            <a href="/">News</a><a href="#content_about">About</a><a href="{{route('contact_us_nav')}}">Contact</a><a href="#content_terms">Terms and Conditions</a>
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
    <!-- footer -->
    <script>
        /* Demo purposes only */
        $(".hover").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );
    </script>
@endsection

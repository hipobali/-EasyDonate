<script src="{{asset('bst/js/jquery.js')}}"></script>
<nav class="navbar navbar-expand-md nav-bg shadow-sm">
    <div class=" container-fluid">
        <a class="navbar-brand" href="{{ url('/donor/home') }}">
            <img class="img-fluid" src="{{asset('img/logo_aa.png')}}" width="60px" height="50px">
        </a>
        <button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent22"
                aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon3"><span></span><span></span><span></span></div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent22">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav nav-list text-center">
                <!-- Authentication Links -->

                    <li class="nav-item">
                        <a class="nav-link" href="">{{__('common.home')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about_us')}}">{{__('common.about')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact_us_nav')}}">{{__('common.contact')}}</a>
                    </li>
                    <li class="nav-item last">
                        <a class="nav-link terms" href="{{route('terms_and_conditions')}}">{{__('common.terms_and_conditions')}}</a>
                    </li>
                    <li class="nav-item dropdown dropdown-menu-right">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{__('common.login')}} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{url('people/login')}}">{{__('common.user_login')}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('foundation/login')}}">{{__('common.foundation_login')}}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{__('common.signup')}} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{route('people_register_view')}}">{{__('common.user_signup')}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('foundation_register_view')}}">{{__('common.foundation_signup')}}</a>
                        </div>
                    </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function () {
        $('.third-button').on('click', function () {
            $('.animated-icon3').toggleClass('open');
        });
    });
</script>

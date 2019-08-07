<script src="{{asset('bst/js/jquery.js')}}"></script>
<nav class="navbar  fixed-top navbar-expand-md nav-bg shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/home') }}">
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
            <ul class="navbar-nav nav-list text-center  ">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('common.login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('common.signup') }}</a>
                        </li>
                    @endif
                @else
                    @if(Auth::user()->type=='foundation')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('foundation_request_view')}}">Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{__('common.about')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">{{__('common.contact')}}</a>
                        </li>
                        <li class="nav-item last">
                            <a class="nav-link terms" href="#">{{__('common.terms_and_conditions')}}</a>
                        </li>
                    @endif
                @if(Auth::user()->type=='people')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('request_user_post')}}">Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{__('common.about')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">{{__('common.contact')}}</a>
                            </li>
                            <li class="nav-item last">
                                <a class="nav-link terms" href="#">{{__('common.terms_and_conditions')}}</a>
                            </li>
                        @endif
                    @if(Auth::user()->type=='admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/home')}}">{{__('common.home')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin_foundation_data')}}">Foundation_Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin_peopleInNeed_data')}}">PeopleInNeed_Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin_foundation_post_data')}}">Foundation_post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin_foundation_report_data')}}">Report_post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin_foundation_people_post_data')}}">People_in_need_post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('admin/category/data/')}}">Category</a>
                            </li>
                        @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

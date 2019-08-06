<script src="{{asset('bst/js/jquery.js')}}"></script>
<nav class="navbar navbar-expand-md nav-bg shadow-sm">
    <div class=" container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
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
                        <a class="nav-link" href="">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>
                    <li class="nav-item last">
                        <a class="nav-link terms" href="#">Terms and Conditions</a>
                    </li>
                    <li class="nav-item dropdown dropdown-menu-right">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Login <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{url('people/login')}}">User Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('foundation/login')}}">Foundation Login</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            SignUp <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{route('people_register_view')}}">User SignUp</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('foundation_register_view')}}">Foundation SignUp</a>
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

<nav class="mb-4 navbar navbar-expand-lg navbar-dark cyan">
    <a class="navbar-brand font-bold align-content-center" href="index.php">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                <!--     <a class="dropdown-item" href="{{ url('profile') }}"><i class="fa fa-user"></i>My account</a> -->
                    <a class="dropdown-item" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i>Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
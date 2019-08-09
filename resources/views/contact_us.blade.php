@extends('layouts.app1')
@if(Auth::user())
    @extends('layouts.nav')
    @endif
@extends('layouts.donor_nav')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="{{asset('css/contactUs.css')}}" rel="stylesheet">
    <script src="js/contactUs.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white"><i class="fa fa-envelope"></i> Contact us.
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('send_mail')}}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="6" required></textarea>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-dark text-right">Submit</button></div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                    <div class="card-body">
                        <p>No.22, BaYintNaung(9) Street,</p>
                        <p>Kamarkyi Road, ThinGanKwin Township,</p>
                        <p>Yangon, Myanmar</p>
                        <p>Email : easydonate@gmail.com</p>
                        <p>Tel. +95 9960005016</p>
                        <p>Tel. +95 9256137059</p>
                        <p>Tel. +95 9769146759</p>
                        <p>Tel. +95 9797911982</p>
                        <p>Tel. +95 9954499492</p>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>About</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25"><br>
                    <a class="logo" href="/" >
                        <img src="../../../img/logo_aa.png" width="70px" height="auto">
                    </a><br><br>
                    <p class="mb-0">
                        We rise by lifting others.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5>Phone</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone mr-2"></i> +95 9960005016</li>
                        <li><i class="fa fa-phone mr-2"></i> +95 9256137059</li>
                        <li><i class="fa fa-phone mr-2"></i> +95 9769146759</li>
                        <li><i class="fa fa-phone mr-2"></i> +95 9797911982</li>
                        <li><i class="fa fa-phone mr-2"></i> +95 9954499492</li>
                    </ul>
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
                    <h5>Address</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home mr-2"></i>No.22, BaYintNaung(9) Street,<br> &nbsp;&nbsp;&nbsp;&nbsp; ThinGanKwin Township,<br>&nbsp;&nbsp;&nbsp;&nbsp; Yangon, Myanmar</li>
                        <li><i class="fa fa-envelope mr-2"></i> easydonate@gmail.com</li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-2 col-xl-2">
                    <h5>Social</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li style="float: left"><a href=""><i class="fa fa-facebook fa-2x pr-3"></i></a></li>
                        <li style="float: left"><a href=""><i class="fa fa-twitter fa-2x pr-3"></i></a></li>
                        <li style="float: left"><a href=""><i class="fa fa-instagram fa-2x pr-3"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">

                </div>
            </div>
        </div>
    </footer>
@stop


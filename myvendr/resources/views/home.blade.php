<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vendr</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Anton|Risque" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <div class="container">
        <h1 class="title">Vendr</h1>
        <div class="navigation">
    </div>
        <div class="containerTwo">
            <div class="menuTwo">
                <!-- <a class="links" href="#top">Home</a> -->
                <a class="links" href="#containerEmpty">About us</a>
                <a class="links" href="#containerEmptyTwo">Contact us</a>
                @auth
                    <a class="links" href="{{ route('deliveries.index') }}">Deliveries</a>
                    <a class="links" href="{{ url('/logout') }}">Logout</a>
                @else
                    <a class="links" href="{{ route('login') }}">Login</a>
                    <a class="links" href="{{ route('register') }}">Register</a>
                @endauth
                <a class="links" href="/tools">Tools</a>
            </div>
            <div class="motto">
                Wonder. No More.
            </div>
            <div id="containerEmpty">
            </div>
            <div id="About">
                About Us
                <p>Our mission is to simplify communication between customer and vendor/supplier.  Vendr is an application that gives customers and suppliers the ability to send and receive instant messages on current day deliveries.  No more calling around to find out what happened with your delivery.</p>
                <a class="backToTop" href="#top">Back to Top</a>
            </div>
            <div id="containerEmptyTwo"></div>
            <div id="contentThree">
                Contact Us
                <p>Email:<a class="vemail" href="#">vendr@gmail.com</a></p>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-slack"></a>
                <div>
                    <a class="backToTop" href="#top">Back to Top</a>
                </div>
            </div>
            
        </div>
    <div class="footer">&copy; Copyright 2018 MRP LLC</div>
</body>
</html>

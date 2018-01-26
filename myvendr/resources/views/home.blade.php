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
    </head>
<body>
    <div class="container">
        @if (Route::has('login'))
        <h1 class="title">Vendr</h1>
        <div class="navigation">
        @auth
            <div class="header">Deliveries</div>
            <a href="{{ url('/logout') }}">Logout</a>
        </div>
        <div class"menu">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
            <label class="form-check-label" for="autoSizingCheck2">
            Select To Send Message To All Vendors
            </label>
            </div>
        </div>
        <div class="content">
            <table>
                <tr>
                    <th>Vendor/Supplier</th>
                    <th>Status</th>
                    <th>Comment</th>
                    <th>Send Message</th>
                </tr>
                <tr>
                    <td>Soda Company</td>
                    <td>On time</td>
                    <td></td>
                    <td>
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Message">
                            </div>
                        </div>
                    </form>
                    </td>
                    <td>
                    <button type="submit" class="btn btn-primary">Send</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
        @else
        <div class="containerTwo">
            <div class="menuTwo">
                <a class="links" href="{{ route('home') }}">Home</a>
                <a class="links" href="{{ route('login') }}">About</a>
                <a class="links" href="{{ route('login') }}">Login</a>
                <a class="links" href="{{ route('register') }}">Register</a>
                <a class="links" href="/tools">Tools</a>
            </div>
            <div class="contentTwo">
                About Us
                <p>Our mission is to simplified communication between customers and its vendor/suppliers in regards to status of delivery.  No more calling around to find out what happened with your delivery.  Vendr lets customers see the status of their current day receiving deliveries.  Moreover, customers can also send messages to their vendor/supplier if needed.</p>
            </div>
            <div class="contentThree">
                Contact Us
                <p> Email: vendr@gmail.com</p>
            </div>
            @endauth
        @endif
            
        </div>
    <div class="footer">&copy; Copyright 2018 MRP LLC</div>
</body>
</html>

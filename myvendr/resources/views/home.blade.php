<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vendr</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <style>
        body {
            background-image: url(/assets/images/truck.jpg);
        }
        
        .container {
            display: grid;
            grid-template-columns: repeat(2, auto);
            width: 100%;
            font-size: 100px;
        }

        .header {
            font-family: 'Work Sans', sans-serif;
            margin-top: -10px;
            /* font-family: 'Roboto', sans-serif; */
        }

        .links {
            font-size: 20px;
            text-align: right;
            margin-top: 3px;
            display: grid;
            grid-row: 1 / 1;



        }

        /* .container {
            width: 500px;
            height: 400px;
            margin: 100px auto 0;
            display: grid;
            grid-template-columns: repeat(4, auto);
            grid-gap: 1em;
        } */

        /* .item {
            border: 1px solid #999;
        } */

        /* .item:first-child {
            background: red; */
            /*Below is one way to do it
            /* grid-row-start: 1;
            grid-row-end: 2;

            grid-column-start: 4;
            grid-column-end: 5; */

            /* But here is a shorthand version */
            /* grid-row: 2 / 3;
            grid-column: 1 / 4;
        } */

        /* .item:last-child {
            background: green;
            grid-column: 2 / 5; 
        } */
        </style>
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>
       <!-- <div class= "container">
            <div class= "item">1</div>
            <div class= "item">2</div>
            <div class= "item">3</div>
            <div class= "item">4</div>
            <div class= "item">5</div>
            <div class= "item">6</div>
       </div> -->
        <section id="container">
            <header>Vendr</header>
            <nav>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="links" href="{{ route('login') }}">Login</a>
                        <a class="links" href="{{ route('register') }}">Register</a>
                        <a class="links" href="/tools">Tools</a>
                    @endauth
                </div>
            @endif
            </nav>
            <main>About Us
            <p>Our mission is to simplified communication between customers and its vendor/suppliers in regards to status of delivery.  No more calling around to find out what happened with your delivery.  Vendr lets customers see the status of their current day receiving deliveries.  Moreover, customers can also send messages to their vendor/supplier if needed.</p>
            </main>
            <aside>
            Contact Us
            
            </aside>
        </section>
    </body>
</html>

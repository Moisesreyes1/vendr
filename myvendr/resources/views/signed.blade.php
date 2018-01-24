<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vendr</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                <div class="top-right links">
                    <a href="{{ url('/home') }}">Home</a>
                    <a class="links" href="{{ route('/') }}">Logout</a>
                </div>
            </nav>
            <h3>Deliveries</h3>
            <select class="chosen-select" id="q1">
            <option value="">Select an option</option>
            <option value="1">Truck malfunction, delayed 2+ hours</option>
            <option value="2">Product out of stock</option>
            <option value="3">Cancel delivery due to inventory</option>
            </select>
            
        </section>
    </body>
</html>

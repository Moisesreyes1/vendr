<style>
    html, body {
        background: url("/images/city.jpg") no-repeat top center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        overflow-x: hidden;
    }
</style>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="containerIndex">
        @if (Route::has('login'))
        <a href="{{ url('/home') }}">
        <img id="logoIndex" src="/images/logotruck.png" alt="truck">
        </a>
        <h4 id="welcome">Welcome, {{ Auth::user()->name}} </h4>
        @auth
            <div class="navigationIndex">
                <h3>Deliveries</h3>
            </div>
            <div id="linksIndex">
                <a class="homeIndex" href="{{ url('/home') }}">Home</a>
                <a class="logoutIndex" href="{{ url('/logout') }}">Logout</a>
            </div>
        <div class="content">                           
            <table class="tableContent">
                <tr>
                    <th>Vendor/Supplier</th>
                    <th>Status</th>
                    <th>Comment</th>
                </tr>
                @foreach ($deliveries as $delivery)
                <tr>   
                    <td><a class="indexTable" href="{{ route('deliveries.show', $delivery->id) }}">{{ $delivery->vendor->name}}</a></td>
                    <td>{{ $delivery->status }}</td>
                    <td>{{ $delivery->comment}}</td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
        @else
        <h3>Please log in to see you deliveries.</h3>
        <a class="links" href="{{ route('login') }}">Login</a>
    </div>
    @endauth
    @endif
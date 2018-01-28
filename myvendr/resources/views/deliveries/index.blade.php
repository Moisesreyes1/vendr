<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="containerIndex">
        @if (Route::has('login'))
        <h1> <a href="{{ url('/home') }}" class="titleIndex">Vendr</a></h1>
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
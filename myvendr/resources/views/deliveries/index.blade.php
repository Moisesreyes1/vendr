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
                @foreach ($deliveries as $delivery)
                <tr>   
                    <td><a href="{{ route('deliveries.show', $delivery->id) }}">{{ $delivery->vendor->name}}</a></td>
                    <td>{{ $delivery->status }}</td>
                    <td>{{ $delivery->comment}}</td>
                    <td></td>
                </tr>
                @endforeach
                <!-- <tr>
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
                </tr> -->
            </table>
        </div>
        @else
        <h3>Please log in to see you deliveries.</h3>
        <a class="links" href="{{ route('login') }}">Login</a>
    </div>
    @endauth
    @endif
<table>
    <tr>
        <th>Vendor/Supplier</th>
        <th>Status</th>
        <th>Comment</th>
        <th>Send Message</th>
    </tr>
    <tr>   
        <td>{{ $delivery->vendor->name }}</td>
        <td>{{ $delivery->status }}</td>
        <td>{{ $delivery->comment}}</td>
        <td></td>
    </tr>

    <a class="links" href="{{ route('deliveries.index') }}">Deliveries</a>
</table
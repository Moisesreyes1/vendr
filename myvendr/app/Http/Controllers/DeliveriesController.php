<?php

namespace App\Http\Controllers;
// namespace Illuminate\Support\Facades;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Delivery;

class DeliveriesController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $vendorIds = DB::table('vendors')->where('user_id', $userId)->pluck('id');

        $deliveries = Delivery::whereIn('vendor_id', $vendorIds)->with('vendor')->get();
        

        return view('deliveries.index', compact('deliveries'));
    }

    public function show($id)
    {
       $delivery = Delivery::find($id);

       return view('deliveries.show', compact('delivery'));
    }

    public function edit($id, Request $request)
    {
        $delivery = Delivery::find($id);

        $delivery->comment = $request->message;
        $delivery->save();
        
        return redirect()->route('deliveries.index');
    }
}

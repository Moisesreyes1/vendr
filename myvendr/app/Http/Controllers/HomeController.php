<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CustomerHelp;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /** Sender email */
    public function build()
{
    return $this->from('example@example.com')
                ->view('emails.orders.shipped');
}
}

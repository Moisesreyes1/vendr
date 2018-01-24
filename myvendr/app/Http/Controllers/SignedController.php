<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignedController extends Controller
{
    public function index()
    {
        return view('signed');
    }
}

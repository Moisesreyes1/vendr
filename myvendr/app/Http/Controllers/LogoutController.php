<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}





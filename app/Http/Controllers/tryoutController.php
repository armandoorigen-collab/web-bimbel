<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tryoutController extends Controller
{
     public function index() 
    {
        return view('tryout.tryout');
    }
}


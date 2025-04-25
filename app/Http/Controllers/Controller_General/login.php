<?php

namespace App\Http\Controllers\Controller_General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login extends Controller
{
    function loginin(){
        return view('login');
    }
}

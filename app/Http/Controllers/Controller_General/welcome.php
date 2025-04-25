<?php

namespace App\Http\Controllers\Controller_General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class welcome extends Controller
{
    function home(){
        return view('welcome');
    }
}

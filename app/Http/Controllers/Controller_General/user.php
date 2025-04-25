<?php

namespace App\Http\Controllers\Controller_General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user extends Controller
{
    function id(){
        return view('Views_General.User');
    }
}

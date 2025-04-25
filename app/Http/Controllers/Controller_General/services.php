<?php

namespace App\Http\Controllers\Controller_General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class services extends Controller
{
    function exams(){
        return view('Views_General.Services');
    }
}

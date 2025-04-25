<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('Services');
});

Route::get('/admin', function () {
    return view('Admin');
});

Route::get('/user', function () {
    return view('User');
});

Route::get('/login', function () {
    return view('Login');
});

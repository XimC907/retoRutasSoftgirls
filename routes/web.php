<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_General\welcome;
use App\Http\Controllers\Controller_General\services;
use App\Http\Controllers\Controller_General\login;
use App\Http\Controllers\Controller_General\user;

Route::get('/', [welcome::class, 'home']);
Route::get('/services', [services::class, 'exams']);
Route::get('/login', [login::class, 'loginin']);
Route::get('/user', [user::class, 'id']);


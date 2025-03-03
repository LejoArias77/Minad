<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dash/dashboard', function () {
    return view('/dash/dashboard');
});

Route::get('/register', function () {
    return view('/dash/register');
});
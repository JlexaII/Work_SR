<?php

use Illuminate\Support\Facades\Route;
use function GuzzleHttp\Promise\all;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
  return view('contact');
});

Route::post('/users/signin', 'App\Http\Controllers\SigninController@signin')->name('kirish');

Route::post('/users/signup', 'App\Http\Controllers\SignupController@signup')->name('Ak-ochish');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/discography', function () {
    return view('discography');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/contact', function () {
    return view('contact');
});




Route::get('/music-distribution', function () {
    return view('music-distribution');
});
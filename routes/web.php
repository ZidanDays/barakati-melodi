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




Route::get('/catalog-management', function () {
    return view('services.catalog-management');
});
Route::get('/distribution-and-delivery', function () {
    return view('services.distribution-and-delivery');
});
Route::get('/analytics-and-reporting', function () {
    return view('services.analytics-and-reporting');
});
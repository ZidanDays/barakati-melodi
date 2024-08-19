<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;


Route::resource('posts', PostController::class);


Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});




Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});




Route::get('/catalog-management', function () {
    return view('services.catalog-management', [
        'title' => 'Catalog Management'
    ]);
});
Route::get('/distribution-and-delivery', function () {
    return view('services.distribution-and-delivery', [
        'title' => 'Distribution And Delivery'
    ]);
});
Route::get('/analytics-and-reporting', function () {
    return view('services.analytics-and-reporting', [
        'title' => 'Analytics and Reporting'
    ]);
});



//auth

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
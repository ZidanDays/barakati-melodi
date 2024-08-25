<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
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

Route::get('/helpdesk', function () {
    return view('helpdesk', [
        'title' => 'Helpdesk'
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



// admin
Route::get('/admin', function () {
    return view('admin.index', [
        'title' => 'Admin'
    ]);
});

// Route::get('/feedback', function () {
//     return view('admin.feedback', [
//         'title' => 'Feedback'
//     ]);
// });


// end of admin




//message
// Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
// Route::post('/contact', [MessageController::class, 'store'])->name('contact');
// Route::get('/messages/{message}/edit', [MessageController::class, 'edit'])->name('messages.edit');
// Route::put('/messages/{message}', [MessageController::class, 'update'])->name('messages.update');
// Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
//end of message


// contact
// Route::get('/contacts', [MessageController::class, 'index'])->name('contacts');
Route::get('/feedback', [MessageController::class, 'index'])->name('contacts');
Route::post('/contact', [MessageController::class, 'store'])->name('contact');
Route::get('/contacts/{contact}/edit', [MessageController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [MessageController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [MessageController::class, 'destroy'])->name('contacts.destroy');
// end of contact




//auth

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth');
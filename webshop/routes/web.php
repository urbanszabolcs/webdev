<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact', function () {
    return view('contact');
});

//Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/products', function () {
    return view('products.index');
});

Route::get('/products/audio', function () {
    return view('products.audio');
});

Route::get('/products/cars', function () {
    return view('products.cars');
});

Route::get('/products/guns', function () {
    return view('products.guns');
});
Route::get('/admin/messages', function () {
    $messages = \App\Models\Contact::all();
    return view('admin.messages', compact('messages'));
});


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

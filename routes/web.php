<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;



Route::get('/', [NewsController::class, 'index']);

Route::get('/category_blog/{id}', [NewsController::class, 'showByCategory'])->name('category_blog');

Route::get('/news/{id}', [NewsController::class, 'detail'])->name('news_detail');

Route::get('/search', [NewsController::class, 'search'])->name('search');

Route::get('/about', function () {
    return view('client.about');
})->name('about');
Route::get('/contact', function () {
    return view('client.contact');
})->name('contact');
Route::get('/login', function () {
    return view('client.login');
})->name('login');
Route::get('/register', function () {
    return view('client.register');
})->name('register');














// <li><a href="{{ route('about') }}">Giới thiệu</a></li>
// <li><a href="{{ url('/about') }}">Giới thiệu</a></li>

//Route::get('/about', function () {
//     return view('client.about');
// })->name('about');
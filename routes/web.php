<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('home', [
        "title" => "Home",
        "books" => Book::all()
    ]);
});

Route::get('/chart', function () {
    return view('chart', [
        "title" => "Chart"
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/book', function (){
    return view('book', [
        "title" => "books",
        "books" => book::all()
    ]);
});
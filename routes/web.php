<?php

use App\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutAccountController;
use Illuminate\Support\Facades\Auth;


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


// Route::get('/', [BookController::class, 'allBooks']);
// Route::get('/', [BookController::class, 'allBooks']);
// Route::get('/', 'BookshopHomeController@index')->name('bookshop.home');

// Route::get('/chart', function () {
//     return view('chart', [
//         "title" => "Chart"
//     ]);
// });

// Route::post('/login', function () {
//     return view('login');
// });

// Route::get('/signup', function () {
//     return view('signup');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');;

Route::get('/admin', function () {
    return view('admin')->name('admin');
});

Route::get('/book/{book}', 'BookController@bookDetails')->name('book-details');


// Route::get('/books', function (){
//     return view('table');
// });

Route::get('/{book:slug}', [BookController::class, 'show'])->name('book-details');

// Auth::routes();
Auth::routes();
Route::post('/logout', [LogoutAccountController::class, 'logout'])->name('logout');

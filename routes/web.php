<?php

use App\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminBooksController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');;

Route::get('/admin', function () {
    return view('admin')->name('admin');
});

Route::get('/{book:slug}', [BookController::class, 'show'])->name('book-details');

Auth::routes();
Route::post('/logout', [LogoutAccountController::class, 'logout'])->name('logout');

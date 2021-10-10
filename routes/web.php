<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;


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


Route::get('/', [BookController::class, 'index']);


// Route::get('/chart', function () {
//     return view('chart', [
//         "title" => "Chart"
//     ]);
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

// Route::get('/admin', [AdminController::class, 'table']);

// Route::get('/admin/{title}', [AdminController::class, 'table_books']);

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/books', function (){
    return view('table');
});

Route::get('/{book:slug}', [BookController::class, 'show']);

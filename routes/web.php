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

// Route::get('/book/{book}', 'BookController@bookDetails')->name('book-details');


Route::get('/{book:slug}', [BookController::class, 'show'])->name('book-details');

Route::group(['middleware' => 'admin'], function (){
    Route::get('/admin-home', 'Admin\AdminBaseController@index')->name('admin.home');

    Route::put('/admin/books/restore/{id}', 'Admin\AdminBooksController@restore')
        ->name('book.restore');
    Route::delete('admin/books/forceDelete/{id}', 'Admin\AdminBooksController@forceDelete')
        ->name('book.forceDelete');
    Route::get('/trash-books', 'Admin\AdminBooksController@trashBooks')
        ->name('admin.trash-books');
    Route::get('admin/discount-books', 'Admin\AdminBooksController@discountBooks')->name('admin.discountBooks');

    Route::resource('/admin/books', AdminBooksController::class);
    Route::resource('/admin/categories', 'Admin\AdminCategoriesController');
    Route::resource('/admin/authors', 'Admin\AdminAuthorsController');
    Route::resource('/admin/users', 'Admin\AdminUsersController');
    Route::resource('/admin/orders', 'Admin\AdminOrdersController');
    Route::resource('/admin/reviews', 'Admin\AdminReviewsController');
});

// Auth::routes();
Auth::routes();
Route::post('/logout', [LogoutAccountController::class, 'logout'])->name('logout');

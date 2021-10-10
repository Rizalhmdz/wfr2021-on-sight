<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Htp\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "Books",
            "books" => book::all()
        ]);
    }

    public function show(Book $book){
        return view('book', [
            "title" => "Single book",
            "book" => $book
        ]);
    }
}


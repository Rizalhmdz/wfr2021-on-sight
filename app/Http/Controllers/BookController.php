<?php

namespace App\Http\Controllers;

use Illuminate\Htp\Request;
use App\Models\book;

class BookController extends Controller
{
    public function index(){
        return view('books', [
            "title" => "Books",
            "books" => book::all()
        ]);
    }

    public function show($id){
        return view('book', [
            "title" => "Single book",
            "books" => book::find($id)
        ]);
    }
}
}

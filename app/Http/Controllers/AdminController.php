<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function table(){
        return view('admin');
    }

    public function table_books(){
        return view('table');
    }
}

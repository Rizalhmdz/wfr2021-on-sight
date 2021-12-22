<?php

namespace App\Http\Controllers;
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

<?php

namespace App\Http\Controllers;

use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $engineering_books = Book::with('category',  'author', 'image')->whereHas('category', function($query) {
            $query->where('slug', 'engineering'); })
            ->take(8)
            ->latestFirst()
            ->get();
        $literature_books = Book::with('category', 'author', 'image')
            ->whereHas('category', function ($query){
                $query->where('slug', 'literature'); })
            ->take(4)
            ->latestFirst()
            ->get();
        $discount_books = Book::with('category',  'author', 'image')
            ->where('discount_rate', '>', 0)
            ->orderBy('discount_rate', 'desc')
            ->take(6)
            ->get();

        # ComposerServiceProvider load here
        $books = Book::with('author', 'image', 'category')
            ->orderBy('id', 'DESC')
            ->search(request('term')) #...Search Query
            ->paginate(16);

        return view('home', compact('engineering_books', 'discount_books', 'literature_books', 'books'));
    }
}

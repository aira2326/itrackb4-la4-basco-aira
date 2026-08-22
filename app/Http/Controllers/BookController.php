<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Harry Potter', 'author' => 'J.K. Rowling', 'year' => 1997],
            ['title' => 'The Little Prince', 'author' => 'Antoine de Saint-Exupery', 'year' => 1943],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'year' => 1813],
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'year' => 1937],
            ['title' => 'The Alchemist', 'author' => 'Paulo Coelho', 'year' => 1988],
        ];

        return view('books.index', ['books' => $books]);
    }
}
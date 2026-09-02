<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    private function getBooks()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Harry Potter',
                'author' => 'J.K. Rowling',
                'year' => 1997,
                'genre' => 'Fantasy',
            ],
            2 => [
                'id' => 2,
                'title' => 'The Little Prince',
                'author' => 'Antoine de Saint-Exupery',
                'year' => 1943,
                'genre' => 'Fantasy',
            ],
            3 => [
                'id' => 3,
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'year' => 1813,
                'genre' => 'Romance',
            ],
            4 => [
                'id' => 4,
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'year' => 1937,
                'genre' => 'Fantasy',
            ],
            5 => [
                'id' => 5,
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'year' => 1988,
                'genre' => 'Adventure',
            ],
            6 => [
                'id' => 6,
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'year' => 1960,
                'genre' => 'Drama',
            ],
            7 => [
                'id' => 7,
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'year' => 1925,
                'genre' => 'Drama',
            ],
        ];
    }

    public function index()
    {
        $books = $this->getBooks();

        return view('books.index', [
            'books' => $books
        ]);
    }

    public function show($id)
    {
        $books = $this->getBooks();

        if (!isset($books[$id])) {
            abort(404);
        }

        return view('books.show', [
            'book' => $books[$id]
        ]);
    }

    public function featured()
    {
        $books = $this->getBooks();

        return view('books.show', [
            'book' => $books[1]
        ]);
    }

    public function filter($genre = null)
    {
        $books = $this->getBooks();

        if ($genre === null) {
            return view('books.filter', [
                'books' => $books,
                'genre' => null
            ]);
        }

        $filteredBooks = [];

        foreach ($books as $id => $book) {
            if (strtolower($book['genre']) === strtolower($genre)) {
                $filteredBooks[$id] = $book;
            }
        }

        return view('books.filter', [
            'books' => $filteredBooks,
            'genre' => $genre
        ]);
    }
}
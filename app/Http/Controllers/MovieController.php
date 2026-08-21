<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Avengers: Endgame', 'director' => 'Anthony Russo and Joe Russo', 'year' => 2019],
            ['title' => 'Spider-Man: No Way Home', 'director' => 'Jon Watts', 'year' => 2021],
            ['title' => 'Inside Out', 'director' => 'Pete Docter', 'year' => 2015],
            ['title' => 'Frozen', 'director' => 'Chris Buck and Jennifer Lee', 'year' => 2013],
            ['title' => 'The Lion King', 'director' => 'Jon Favreau', 'year' => 2019],
        ];

        return view('movies.index', ['movies' => $movies]);
    }
}
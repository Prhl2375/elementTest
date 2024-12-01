<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\Movie\Movie;

class MovieController extends Controller
{
    public function showAction(){
        $movies = Movie::paginate(8);
        return view('movies.home', ['movies' => $movies]);
    }
}

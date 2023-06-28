<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        /***  $movies = Movie::all() ***/

        $movies = Movie::where('vote', '>', 8)
                ->orderBy('vote', 'desc')->get();


        return view('welcome', compact('movies'));
    }
}

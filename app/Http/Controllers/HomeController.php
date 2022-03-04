<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {

        // $data = "ciao";
        $data = Movie::all();

        // dd($data);

        return view('home', compact("data"));
    }
}

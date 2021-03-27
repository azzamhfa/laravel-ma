<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $film_stock = \App\Models\film_stock::all();
        // dd($genre);
        return view('welcome',['film_stock' => $film_stock]);
    }
}

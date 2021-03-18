<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $genre = \App\Models\genres::all();
        // dd($genre);
        return view('welcome',['genre' => $genre]);
    }
}

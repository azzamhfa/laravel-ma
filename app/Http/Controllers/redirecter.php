<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class redirecter extends Controller
{
    public function redirectSearch(Request $request)
    {
        // return redirect('/search/'.$request->input);
        return redirect()->route('search', ['input' => $request->input]);
    }
}

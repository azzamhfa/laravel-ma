<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genres;
use App\Models\genre_list;
use App\Models\film;
use App\Models\film_stock;

class detailCon extends Controller
{
    public function getDetail($id)
    {
        $detailFilm = film::find($id);
        return view('konfirmasi_pembayaran', ['result' => $detailFilm] );
    }
}

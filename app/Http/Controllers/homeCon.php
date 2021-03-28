<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\genres;
use App\Models\genre_list;
use App\Models\film;
use App\Models\film_stock;

class homeCon extends Controller
{
    public function home()
    {
        $head = film::all();
        return view('welcome', ['head' => $head] );

    }

    public function search($input)
    {
        $searchP = explode(' ', $input);
        $filmQuery = film::query();

        foreach($searchP as $search)
        {
            $filmQuery->distinct('judul')->
            join('genre_list','film.id_film','=','genre_list.id_film')->
            join('genres','genre_list.id_genre','=','genres.id_genre')->
            where(function($q) use ($search)
            {
                $q->where('judul', 'like', '%'.$search.'%')
                ->orWhere('slogan', 'like', '%'.$search.'%')
                ->orWhere('sutradara', 'like', '%'.$search.'%')
                ->orWhere('genre', 'like', '%'.$search.'%');
            }
        );
        }

        $batch = $filmQuery->get();
        // dd($batch);
        return view('welcome', ['batch' => $batch]);
    }

    public function genre($text)
    {

        $getId = genres::where('genre','=',$text)->get();
        
        foreach($getId as $g)
        {
            $id = $g->id_genre;
        }

        $type = genres::find($id)->film;

        dd($type);
        return view('welcome', ['result' => $type]);
    }
}

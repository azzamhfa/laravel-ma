<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = Http::get('https://film-service-ma.herokuapp.com/moviesDB')->json();
        // return $data;
        // $film_stock = \App\Models\film::all();
        // dd($genre);
        return view('welcome', ["data" => $data]);
    }

    public function search($input)
    {
        $searchP = explode(' ', $input);
        $filmQuery = \App\Models\film::query();

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

        $film_stock = $filmQuery->get();
        // dd($film_stock);
        return view('welcome', ['film_stock' => $film_stock]);
    }
}

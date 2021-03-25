<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_film';

    public $timestamps = false;

    protected $table = 'film';

    // public function genre_list()
    // {
    //     return $this->hasMany(genre_list::class, 'id_film', 'id_film');
    // }

    public function genres()
    {
        return $this->belongsToMany(genres::class, 'genre_list', 'id_film', 'id_genre');
    }

    public function film_stock()
    {
        return $this->hasOne(film_stock::class, 'film_id', 'id_film');
    }
}

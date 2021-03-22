<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre_list extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'genre_list';

    public function genres()
    {
        return $this->belongsTo(genres::class, 'id_genre', 'id_genre');
    }

    public function film()
    {
        return $this->belongsTo(film::class, 'id_film', 'id_film');
    }
}

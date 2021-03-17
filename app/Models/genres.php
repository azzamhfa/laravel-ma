<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genres extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_genre';

    public $timestamps = false;

    public function genre_list()
    {
        return $this->hasMany(genre_list::class, 'id_genre', 'id_genre');
    }

    
}

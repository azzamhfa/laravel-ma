<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film_stock extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_stock';

    public $timestamps = false;

    protected $table = 'film_stock';

    public function film()
    {
        return $this->belongsTo(film::class, 'id_film', 'film_id');
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_stock', 'id_stock');
    }
}

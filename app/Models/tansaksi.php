<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tansaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi';

    public $timestamps = false;

    public function film_stock()
    {
        return $this->belongsTo(film_stock::class, 'id_stock', 'id_stock');
    }

    public function kasir()
    {
        return $this->belongsTo(kasir::class, 'id_kasir', 'id_kasir');
    }

    public function member()
    {
        return $this->belongsTo(member::class, 'id_member', 'id_member');
    }

}

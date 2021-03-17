<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kasir';

    public $timestamps = false;

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_kasir', 'id_kasir');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_member';

    public $timestamps = false;

    protected $table = 'member';

    public function member_info()
    {
        return $this->belongsTo(member_info::class, 'id_info', 'id_info');
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_member', 'id_member');
    }
}

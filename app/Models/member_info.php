<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class member_info extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_info';

    public $timestamps = false;

    protected $table = 'member_info';

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne(member::class, 'id_info', 'id_info');
    }
}

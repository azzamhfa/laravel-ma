<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_info extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_info';

    public $timestamps = false;

    protected $table = 'member_info';

    public function member()
    {
        return $this->hasOne(member::class, 'id_info', 'id_info');
    }
}

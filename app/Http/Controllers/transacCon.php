<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;

class transacCon extends Controller
{
    public function transac()
    {
        $dummy = array(
            'lama_pinjam' => 3,
            'biaya' => 45000,
            'id_stock' => 1,
            'id_member' => 1
        );

        $getId = transaksi::latest('id_transaksi','desc')->first();
        // echo($getId->id_transaksi);

        $id = $getId->id_transaksi;

        transaksi::create(
            [
                'id_transaksi' => $id+1,
                'tgl_transaksi' => date("Y-m-d"),
                'jenis_transaksi' => 'Pinjam',
                'lama_pinjam' => $dummy['lama_pinjam'],
                'biaya' => $dummy['biaya'],
                'denda' => 0,
                'id_member' => $dummy['id_member'],
                'id_stock' => $dummy['id_stock'],
                'id_kasir' => 1
            ]
        );
    }
}

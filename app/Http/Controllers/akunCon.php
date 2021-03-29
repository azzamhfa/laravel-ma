<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\member;
use App\Models\member_info;

class akunCon extends Controller
{
    public function getAcc($id)
    {
        $detailAcc = member_info::find($id);
        return view('welcome', ['result' => $detailAcc] );
    }

    public function getAllAcc()
    {
        $accs = member_info::all();
    }

    // public function regAcc()
    // {
    //     $details
    // }
}

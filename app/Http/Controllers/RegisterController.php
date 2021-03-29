<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\member_info;
use App\Models\member;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        $getId = member_info::latest('id_info','desc')->first();
        $id = $getId->id_info;
        member_info::create([
            'id_info' => $id+1,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'masa_member' => date("Y-m-d")
        ]);

        $number = ($id+1);

        member::create([
            'id_member' => $id+1,
            'nama' => "user".$number,
            'kontak' => "phone".$number,
            'alamat' => "alamat".$number,
            'id_info' => $id+1
        ]);


        if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->route('login');
        }

        return redirect()->route('home');
    }
}

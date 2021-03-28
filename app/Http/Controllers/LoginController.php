<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member_info;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return view('login');
        }
        return redirect()->route('home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}

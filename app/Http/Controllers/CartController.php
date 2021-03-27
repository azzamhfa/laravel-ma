<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //BUAT LIAT ISI SESSION
    public function accessSessionData(Request $request) {
        if($request->session()->has('id_stock'))
           echo $request->session()->get('id_stock');
        else
           echo 'No data in the session';
     }
      
    //MASUKIN ID_PRODUK SESSION
    public function addToCart(Request $request)
    {
        $id = collect($request->input('id_stock'));
        $request->session()->push('id_stock', $id);
        return redirect('/');
    }
}

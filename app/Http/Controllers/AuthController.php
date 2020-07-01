<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(Request $request){
        dd($request->all());
        $namaDepan = $request["nama_depan"];
        return view('welcome2', ['namaDepan'=>$namaDepan]);
    }
}

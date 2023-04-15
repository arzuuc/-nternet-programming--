<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membercontroller extends Controller
{
    public function register(){
       // echo"üye olma işlemleri burada gerçekleşecektir";
        $isim='arzu';
        return view('member.register',[
            'isim'=> $isim,
        ]);
    }

    public function lostpassword()
    {
        return view('member.lostpwd');
    }

    public function login(){
        return view('member.login');
    }
}

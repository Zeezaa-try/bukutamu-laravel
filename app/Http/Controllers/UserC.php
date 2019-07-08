<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserC extends Controller
{
    public function index (){ //menampilkan halaman registrasi tamu
    	return view ('user');
    }
}


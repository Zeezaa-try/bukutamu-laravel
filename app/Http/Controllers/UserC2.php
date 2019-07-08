<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserC2 extends Controller
{
 	//input nama tamu kedalam database
	public function index (Request $request){
		DB::table('bukutamu')->insert([
			'name' => $request -> nama
			]);

		//kembali ke halaman input daftar tamu
		return redirect('/user');
	}

	//edit data tamu
	public function edit (Request $request){
		DB::table('bukutamu') -> where('id',$request->id) -> update([
			'id' => $request -> id,
			'name' => $request -> nama,
			'time' => $request -> jam]);

		return redirect('/admin');
	}
}

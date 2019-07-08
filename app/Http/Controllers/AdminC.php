<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class AdminC extends Controller
{

	public function index()
	{


    //ambil data pengunjung dari database
    $bukutamu = DB::table('bukutamu')->get();

    //nampilin data ke view
    return view('admin',['bukutamu'=>$bukutamu]);


}

	public function edit($id){
		//
		$bukutamu = DB::table('bukutamu') -> where ('id',$id) -> get();

		return view ('/edit',['bukutamu'=>$bukutamu]);
	}

	public function hapus($id)
	{ 
		//menghapus tamu yang dipilih
		DB::table('bukutamu') -> where ('id',$id) -> delete();

		//kembali ke halaman admin
		return redirect ('/admin');
	}
}

<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class pegawaicontroller extends Controller
{
    //di sini isi controller pegawai
	public function index($nama){

		return $nama;
	}
	public function formulir(){

		return view('formulir');	
	}
	public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
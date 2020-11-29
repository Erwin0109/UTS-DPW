<?php 

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Komentar;
use App\Models\Respon;

class ClientController extends Controller{
	function showHome(){
		$data['list_komentar'] = Komentar::all();
		$data['list_artikel'] = Artikel::all();
		return view('client.home', $data);
	}
	function showArtikel(){
		$data['list_komentar'] = Komentar::all();
		$data['list_artikel'] = Artikel::all();
		return view('client.artikel', $data);
	}
	function showContact(){
		return view('client.contact');
	}
	function filter(){
		$nama = request('nama');
		$data['list_komentar'] = Komentar::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('client.komentar', $data);
	}
}
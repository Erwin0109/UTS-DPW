<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use App\Models\Artikel;

class KomentarController extends Controller
{
    function index(){
    	$data['list_komentar'] = Komentar::all();
    	return view('admin.komentar.index', $data);
    }

    function create(){
    	$data['list_artikel'] = Artikel::all();
		return view('admin.komentar.create', $data);
	}

	function store(){
		$data = new komentar;
		$data->id_user = request()->user()->id;
		$data->id_artikel = request('id_artikel');
		$data->nama = request('nama');
		$data->komentar = request('komentar');
		$data->save();

		return redirect('admin/komentar')->with('success','Data Berhasil Ditambahkan');
		//dd(request()->all());
	}

	function show(Komentar $komentar){
		$data['komentar'] = $komentar;
		return view('admin.komentar.show', $data);
	}

	function edit(Komentar $komentar){
		$data['komentar'] = $komentar;
		return view('admin.komentar.edit', $data);
	}

	function update(Komentar $komentar){
		$komentar->nama = request('nama');
		$komentar->komentar = request('komentar');
		$komentar->save();

		return redirect('admin/komentar')->with('success','Data Berhasil Diubah');
	}

	function destroy(Komentar $komentar){
		$komentar->delete();
		return redirect('admin/komentar')->with('danger','Data Berhasil Dihapus');
	}
}

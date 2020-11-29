<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respon;
use App\Models\Artikel;
use App\Models\Komentar;

class ResponController extends Controller
{
        function index(){
    	$data['list_respon'] = Respon::all();
    	return view('admin.respon.index', $data);
    }

    function create(){
    	$data['list_komentar'] = Komentar::all();
		return view('admin.respon.create', $data);
	}

	function store(){
		$data = new respon;
		$data->id_user = request()->user()->id;
		$data->id_komentar = request('id_komentar');
		$data->respon = request('respon');
		$data->save();
		return redirect('admin/respon')->with('success','Data Berhasil Ditambahkan');
		//dd(request()->all());
	}

	function show(Respon $respon){
		$data['respon'] = $respon;
		return view('admin.respon.show', $data);
	}

	function edit(Respon $respon){
		$data['list_jawaban'] = $respon;
		return view('admin.respon.edit', $data);
	}

	function update(Respon $respon){
		$respon->artikel = request('artikel');
		$respon->komentar = request('komentar');
		$respon->respon = request('respon');
		$respon->save();

		return redirect('admin/respon')->with('success','Data Berhasil Diubah');
	}

	function destroy(Respon $respon){
		$respon->delete();
		return redirect('admin/respon')->with('danger','Data Berhasil Dihapus');
	}
}

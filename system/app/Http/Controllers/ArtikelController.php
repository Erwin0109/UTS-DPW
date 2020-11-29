<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_artikel'] = $user->artikel;
		return view('admin.artikel.index', $data);
	}
	function create(){
		return view('admin.artikel.create');
	}
	function store(){
		$artikel = new Artikel;
		$artikel->id_user = request()->user()->id;
		$artikel->judul = request('judul');
		$artikel->deskripsi = request('deskripsi');
		$artikel->konten = request('konten');
		$artikel->save(); 
		return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('admin.artikel.show', $data);
	}
	function edit(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('admin.artikel.edit', $data);		
	}
	function update(Artikel $artikel){
		$artikel->judul = request('judul');
		$artikel->deskripsi = request('deskripsi');
		$artikel->konten = request('konten');
		$artikel->save();
		return redirect('admin/artikel')->with('warning', 'Data Berhasil Diedit');	
	}
	function destroy(Artikel $artikel){
		$artikel->delete();
		return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
	}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Komentar;
use App\Models\Respon;


class HomeController extends Controller
{
    function index(){
    	$data['list_artikel'] = Artikel::all();
    	return view('index', $data);
    }

    function beranda(){
        $data['list_artikel'] = Artikel::all();
        $data['list_komentar'] = Komentar::all();
    	return view('beranda', $data);
    }

    function QA(){
        $data['list_artikel'] = Artikel::all();
        $data['list_komentar'] = Komentar::all();
    	return view('Q&A', $data);
    }

    function detail(Komentar $komentar){
        $data['list_komentar'] = Komentar::all();
        $data['list_artikel'] = Artikel::all();
        $data['list_respon'] = Respon::all();
        // $data['list_komentar'] = $komentar;
        return view('detail', $data);
    }
}

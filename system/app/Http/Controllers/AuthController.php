<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class AuthController extends Controller{
	function showLogin(){
		return view('login');
	}
	function loginProcess(User $user){
		if(Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
			return redirect('admin/beranda')->with('success','Login Berhasil, Selamat datang');
		} else {
			return back()->with('danger', 'Login gagal, Silahkan coba kembali');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function showRegister(){
		return view('register');
	}

	function storeRegister(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save(); 

		return redirect('login')->with('success','Data Berhasil Ditambahkan');
	}

	function forgotPassword(){
		
	}
}
<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{
	function showHome(){
		return view('home');
	}
	function showBeranda(){
		return view('beranda');
	}
	function showKategori(){
		return view('kategori');
	}
}


 ?>
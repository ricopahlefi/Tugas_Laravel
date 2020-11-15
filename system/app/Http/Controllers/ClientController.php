<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientController extends Controller{
	function index(){
		$data['list_produk'] =  Produk::all();

		return view('client.index', $data);
	}
	function store(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stok = request('stok');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('client.show', $data); 
	}
	
}
?>
<?php
namespace App\Http\Controllers;


use App\Models\produk;
use App\Models\kategori;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    public function index() {
        return view('Produk.produk', [
            'produks' => produk::all()
        ]);
    }

    // public function create() 
    // {
    //     return view('Produk.create');
    // }

    public function create()
    {
        $kategori = kategori::all();
        return view('Produk.create', compact('kategori'));
    }


    public function store(Request $request) {
        $data = $request->validate([
            'NamaProduk' => 'required',
            'Harga_beli' => 'required',
            'Harga_jual' => 'required',
            'Stok' => 'required',
            'id_kategori' => 'required'
        ]);
        

        produk::create($data);



        return redirect('/produk');
    }

    public function edit($id) {
        $produk = produk::where('Produkid', $id)->first();
        return view('Produk.edit', [
            'produk' => $produk
        ]);
    }

    public function update(Request $request, $id) {
        $produk = produk::where('Produkid', $id)->first();
        $data = $request->validate([
            'NamaProduk' => 'required',
            'Harga_beli' => 'required',
            'Harga_jual' => 'required',
            'Stok' => 'required',
            'id_kategori' => 'required'
        ]);

        $produk->update($data);

        return redirect('/produk');
    }

    public function destroy($id) {
        $produk = produk::where('Produkid', $id)->first();
        $produk->delete();
        return redirect('/produk');
    }
}  
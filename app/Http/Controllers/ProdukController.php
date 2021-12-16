<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_produk = Produk::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_produk = Produk::all();
        }
        return view('produk.daftar_produk',['data_produk' => $data_produk]);
    }

    public function add()
    {
        return view('produk.tambah_produk');
    }
    
    public function create(Request $request)
    {
        //dd($request->all());
        Produk::create($request->all());
        if($request->hasFile('imageurl')){
            $request->file('imageurl')->move('images/', $request->file('imageurl')->getClientOriginalName());
            $request->imageurl = $request->file('imageurl')->getClientOriginalName();            
            $request->save();
        }
        return redirect('http://127.0.0.1:8000/produk')->with('sukses', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produk.edit_produk', ['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $produk = Produk::find($id);
        $produk->update($request->all());
        if($request->hasFile('imageurl')){
            $request->file('imageurl')->move('images/', $request->file('imageurl')->getClientOriginalName());
            $produk->imageurl = $request->file('imageurl')->getClientOriginalName();
            $produk->save();
        }
        return view('produk.detail_produk', ['produk' => $produk, 'berhasil'=> 'Data produk berhasil di-update!']);
    }

    public function delete($id)
    {
        $produk = Produk::find($id);
        $produk->delete($produk);
        return redirect('http://127.0.0.1:8000/produk')->with('hapus', 'Produk berhasil dihapus!');
    }

    public function view($id)
    {
        $produk = Produk::find($id);
        return view('produk.detail_produk', ['produk' => $produk]);
    }

    public function daftar(Request $request)
    {
        $products = Produk::all();
        return view('cus.products',['products' => $products]);
    }
}

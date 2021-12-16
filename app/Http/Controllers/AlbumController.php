<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Album;
use App\Models\PhotoAlbum;
use Illuminate\Http\Request;
use App\Models\Cart;

use Ramsey\Uuid\Uuid;
use Laravolt\Indonesia\Models\Province;
use App\Models\Pesanan;
use App\Models\PesananProduk;
use App\Models\Revisi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function index($id)
    {
        $pesanan = Pesanan::where(['id_user' => Auth::user()->id, 'id' => $id])->get();
        if ($pesanan->count() == 0) {
            abort(404);
        }
        $pesananProduk = DB::table('pesanan_produks')->join('products', 'products.id', '=', 'pesanan_produks.id_product')->where('id_pesanan', '=', $id)->select('products.id', 'products.price', 'pesanan_produks.qty', 'pesanan_produks.orientation', 'products.name', 'products.category')->get();
        if ($pesanan[0]->status < 2) {
            return view('user/invoice', ['pesanan' => $pesanan, 'pesananProduk' => $pesananProduk]);
        }
        $revisi = [];
        $pesananProduk = DB::table('pesanan_produks')->join('products', 'products.id', '=', 'pesanan_produks.id_product')->where('id_pesanan', '=', $id)->select('products.id', 'products.price', 'pesanan_produks.qty', 'pesanan_produks.orientation', 'products.name', 'products.category')->get();
        for ($i = 0; $i < $pesananProduk->count(); $i++) {
            error_log($i);
            $album = DB::table('albums')->where('id_pesanan', '=', $pesanan[0]->id)->where('id_product', '=', '' . $pesananProduk[$i]->id)->get();
            $pesananProduk[$i]->album = $album;
            if ($album->count() != 0) {
                $albumPhoto = DB::table('photo_albums')->where('id_pesanan', '=', $pesanan[0]->id)->where('id_product', '=', '' . $pesananProduk[$i]->id)->get();
                $pesananProduk[$i]->album[0]->albumPhoto = $albumPhoto;
            }
            $revis = Revisi::where(['id_pesanan' => $id, 'id_product' =>  $pesananProduk[$i]->id])->get();
            if($revis->count() !=0){
                $revisi[$i] = $revis;
            }
        }

    

        return view('user/upload', [
            'id' => $id,
            'pesanan' => $pesanan,
            'data' => $pesananProduk,
            'revisi' => $revisi
        ]);
    }

    public function uploadFirst(Request $request, $id, $id_pesanan)
    {
        $validateImageData = $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);


        $insert = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $name = $file->getClientOriginalName();
                $path = 'album_photos/' . $id;
                $filename = "Proof-" . $id . $file->getClientOriginalExtension();
                $file->move($path, $filename);
                $insert[$key]['id_pesanan'] = $id;
                $insert[$key]['id_product'] = $id_pesanan;
                $insert[$key]['photo'] = $path . '/' . $filename;
            }
        }


        Album::create([
            'id_pesanan' => $id,
            'id_product' => $id_pesanan
        ]);
        PhotoAlbum::insert($insert);

        return redirect()->route('album', $id);
    }

    public function uploadOne(Request $request, $id, $id_pesanan)
    {
        $validateImageData = $request->validate([
            'imagesone' => 'required',
            'imagesone.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);
        error_log($request->hasfile('imagesone'));
        $insert = [];
        if ($request->hasfile('imagesone')) {
            $file  = $request->file('imagesone');
            $path = 'album_photos/' . $id;
            $filename = "Proof-" . $id . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
            $insert['id_pesanan'] = $id;
            $insert['id_product'] = $id_pesanan;
            $insert['photo'] = $path . '/' . $filename;
        }

        PhotoAlbum::create($insert);

        return redirect()->route('album', $id);
    }

    public function updateJudul(Request $request, $id, $id_pesanan)
    {
        Album::where('id_pesanan', $id)->where('id_product', $id_pesanan)->update(['Judul Album' => $request->judul, 'Request' => $request->subject]);

        return redirect()->route('album', $id);
    }

    public function addRevisi(Request $request, $id, $id_pesanan)
    {
        $revisi = '';
        foreach ($request->revisi as $key => $item) {
            $revisi = $revisi . ', ' . $item;
        }

        Revisi::create(['id_pesanan' => $id, 'id_product' => $id_pesanan, 'revisi' => $revisi]);

        return redirect()->route('album', $id);
    }
}

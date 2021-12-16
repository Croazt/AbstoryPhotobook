<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Order;
use \App\Models\PesananProduk;

class OrderController extends Controller
{
    public function index()
    {
        $data_order = Order::join('users', 'users.id', '=', 'pesanans.id_user')
            ->select('pesanans.*', 'users.name')
            ->get();

        error_log($data_order);
        return view('pesanan.daftar_pesanan', ['data_order' => $data_order]);
    }
    public function create($id,Request $request)
    {
        $order=$request->all();
        $order['id_customer']=$id;
        $order['alamat']=$request->alamat;
        $order['metode_pembayaran']=$request->metode_pengiriman;
        $order['total_harga']=$request->total_harga;
        $order['status']="Menunggu Pembayaran";
        Order::create($order);
        
        $carts=app('App\Http\Controllers\CartController')->get_cart($id);
        $last_id= app('App\Http\Controllers\CartController')->get_last();
        foreach ($carts as $cart){ 
            $c['id_pesanan']= $last_id[0]->max;
            $c['id_produk']= $cart->id_produk;
            $c['qty']= $cart->jumlah;
            $c['harga']= $cart->harga;
            $c['total_harga']= $cart->hargatotal;
            PesananProduk::create($c);
        }
        return redirect('cart/clear');
    }

    public function detail($id)
    {
        $order = Order::join('users', 'users.id', '=', 'pesanans.id_user')
            ->select('pesanans.*', 'users.name', 'users.no_telp', 'users.alamat', 'users.email')
            ->where('pesanans.id_customer', $id)
            ->get();

        $order_produk = PesananProduk::join('produk', 'produk.id', '=', 'pesanan_produks.id_produk')
            ->select('pesanan_produks.*', 'produk.name')
            ->where('id_pesanan', $id)
            ->get();

        //dd($order, $order_produk);
        

        return view('pesanan.daftar_pesanan_client', ['data_order' => $order, 'order_produk' => $order_produk]);
    }
    
    public function detailorder($id)
    {
        $order = Order::join('users', 'users.id', '=', 'pesanans.id_user')
            ->select('pesanans.*', 'users.name', 'users.phone', 'users.address', 'users.email')
            ->where('pesanans.id', $id)
            ->first();

        $order_produk = PesananProduk::join('products', 'products.id', '=', 'pesanan_produks.id_product')
            ->select('pesanan_produks.*', 'products.name')
            ->where('id_pesanan', $id)
            ->get();

        //dd($order, $order_produk);
        
        return view('pesanan.detail_pesanan', ['order' => $order, 'order_produk' => $order_produk]);
    }
    
        
    public function view($id)
    {
        $order = Order::where('id', 'like', $id)->get();
        return view('pesanan.detail_pesanan', ['order' => $order]);
    }


    public function details($id)
    {
        $order = Order::join('users', 'users.id', '=', 'pesanan.id_customer')
            ->select('pesanan.*', 'users.name', 'users.no_telp', 'users.alamat', 'users.email')
            ->where('pesanan.id', $id)
            ->first();

        $order_produk = PesananProduk::join('produk', 'produk.id', '=', 'pesanan_produk.id_produk')
            ->select('pesanan_produk.*', 'produk.nama')
            ->where('id_pesanan', $id)
            ->get();

        //dd($order, $order_produk);
        return view('pesanan.detail_pesanan_client', ['order' => $order, 'order_produk' => $order_produk]);
    }

    public function update($id, $status)
    {
        //dd($id);
        $order = Order::find($id);
        //dd($order);
        switch ($status) {
            case '1':
                $status = 'Menunggu Pembayaran';
                break;
            case '2':
                $status = 'Menunggu Link';
                break;
            case '3':
                $status = 'Sedang Diproses';
                break;
            case '4':
                $status = 'Pesanan Dikirim';
                break;
            case '5':
                $status = 'Pesanan Selesai';
                break;
            case '6':
                $status = 'Menunggu Konfirmasi';
                break;    
            default:
                break;
        }

        $order->status = $status;
        $order->save();

        return redirect('http://127.0.0.1:8000/order/'.$id.'/details');
    }

    public function updateFromClient($id, $status)
    {
        //dd($id);
        $order = Order::find($id);
        //dd($order);
        switch ($status) {
            case '1':
                $status = 'Menunggu Pembayaran';
                break;
            case '2':
                $status = 'Menunggu Link';
                break;
            case '3':
                $status = 'Sedang Diproses';
                break;
            case '4':
                $status = 'Pesanan Dikirim';
                break;
            case '5':
                $status = 'Pesanan Selesai';
                break;
            case '6':
                $status = 'Menunggu Konfirmasi';
                break;    
            default:
                break;
        }

        $order->status = $status;
        $order->save();

        return redirect('http://127.0.0.1:8000/order/'.$id.'/detail');
    }


    public function updatelink($id,Request $request)
    {
        $data_order = Order::select('pesanan.*')
            ->where('pesanan.id', $id)
            ->first();
        
        $data_order->link=$request->links;
        $data_order->request=$request->requests;       
        $data_order->save();

        return $this->updateFromClient($id,"Sedang Diproses");
    }

    public function editlink($id)
    {
        return view('postimg', ['id' => $id]);
    }

    
}

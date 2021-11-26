<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    public function index(){
        $cart = DB::table('carts')->join('products','products.id','=','carts.id_product')->where('id_user','=',Auth::user()->id)->select('products.id','products.price','carts.qty','carts.orientation','products.name','products.category')->get();
        error_log($cart);
        return view('user/cart', ['product'=> $cart]);
    }

    public function store(Request $request)
    {
        switch ($request->input('action')) {
            case 'Cart':
                $cart = Cart::where([['id_product', '=', $request->get('id_product')], ['orientation', '=', $request->get('orientation')]])->get();

                if (count($cart) == 0) {
                    $newCart = new Cart;
                    $newCart->qty = $request->qty;
                    $newCart->id_user = Auth::user()->id;
                    $newCart->id_product = $request->id_product;
                    $newCart->orientation = $request->orientation;

                    $newCart->save();
                } else {
                    $qty = $cart[0]->qty + $request->qty;

                    $cart = Cart::where([['id_product', '=', $request->get('id_product')], ['orientation', '=', $request->get('orientation')]])->update(['qty' => $qty]);
                }

                Alert::success('Produk', 'Berhasil input kedalam cart');
                return redirect()->back();
                break;

            case 'Order':
                
                break;
        }
    }
}

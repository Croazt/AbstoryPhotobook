<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{   
    public function view()
    {
        return view('user/product');
    }

    public function index($type)
    {
        $product ="";
        if ($type == "all") {
            $product = Product::all();
            return response()->json($product);
        }
        

        $product = Product::where('category',$type)->get();
        return response()->json($product);
    }

    public function productDetail($id)
    {

        $product = Product::where('id',$id)->get();
        error_log($product);
        return view('user/detailProduct',['data'=>$product]);
    }
}

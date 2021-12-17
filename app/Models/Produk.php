<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;

class Produk extends Model
{
    protected $table = 'products';
    protected $fillable = ['kategori', 'nama', 'layout', 'ukuran', 'harga', 'ket', 'in_currency', 'imageurl'];

    public function getFoto()
    {
        if(!$this->imageurl){
            return asset('images/default.jpeg');
        }
        return asset($this->imageurl);
    }
}

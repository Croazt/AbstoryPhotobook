<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model
{
    use HasFactory;
    
    protected $primaryKey = null;

    public $incrementing = false;
    
    protected $fillable = [
        'id_pesanan',
        'id_product',
        'photo',
    ];
}

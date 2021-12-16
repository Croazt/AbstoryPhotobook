<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    

    public $incrementing = false;
    
    protected $fillable = [
        'id_pesanan',
        'id_product',
        'Judul Album',
        'Request',
        'Preview'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'pesanans';

    
    public $incrementing = false;
    protected $fillable = [
        'id',
        'id_user',
        'name',
        'address',
        'catatan',
        'link',
        'request',
        'status',        
        'metode_pembayaran',
        'metode_pengiriman',
        'total_harga'    
    ];
}

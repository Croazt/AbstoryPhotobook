<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    

    public $incrementing = false;
    
    protected $fillable = [
        'name',
        'email',
        'id',
        'metode',
        'address',
        'phone',
        'status',
        'province',
        'city',
        'district',
        'village',
        'id_user',
        'pic',
    ];
}

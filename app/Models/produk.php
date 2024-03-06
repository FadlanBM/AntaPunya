<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $primaryKey = 'Produkid';

    protected $table='produk';
    
    protected $fillable = [
        'NamaProduk',
        'Harga_beli' ,
        'Harga_jual' ,
        'Stok' ,
        'id_kategori'
    ];


    protected $guarded = ['Produkid'];
}
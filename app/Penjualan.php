<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{   
    public $timestamps = false;
    protected $fillable = ['Nama','Jenis','Harga','Deskripsi'];
}

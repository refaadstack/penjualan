<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    public function details()
    {
        return $this->hasMany('\App\PenjualanDetail');
    }
    public function pelanggan()
    {
        return $this->belongsTo('\App\Pelanggan');
    }
    
}

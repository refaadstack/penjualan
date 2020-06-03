<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjualanDetail extends Model
{
    public  $timestamps = false;
    public function barang()
    {
        return $this->belongsTo('\App\Barang'); 
    }

}

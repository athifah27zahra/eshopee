<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_Detail extends Model
{
    use HasFactory;
    protected $table = 'transaksi_details';
    public $timestamps = false;

    public function transaksi(){
        $this->belongsTo('App\Models\Transaksi');
    }

    public function barang(){
        $this->belongsTo('App\Models\Barang');
    }
}

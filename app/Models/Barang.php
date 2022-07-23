<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $fillable = ['nama_pembeli', 'tanggal_pembelian', 'nama_barang', 'harga_satuan', 'jumlah_barang', 'total_harga'];
    
    public $timestamps = true;

    // membuat relasi one to one
    public function wali()
    {
        // data dari model barang bisa memiliki 1 data
        //dari model wali melalui id_brang
        return $this-hasOne(Wali::class,'id_barang');
    }
    
}

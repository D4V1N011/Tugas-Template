<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    public $fillable = ['nama','foto','id_barang'];
    public $timestamps = true;

    //membuat relasi di model
    public function barang()
    {
        // data dari model 'Wali' bisa dimiliki
        //oleh model 'Barang' melalui 'id_barang'
        return $this->belongsTo(Barang::class, 'id_barang');
    }
    //method menampilkan image(foto)
    public function image()
    {
        if($this->foto && file_exists(public_path('image/wali/' . $this->foto))) {
            return asset('image/wali/' . $this->foto);
        }else {
            return asset('images/no_image.jpg');
        }
    }

    //menghapus image (foto) di storge (penyimpanan) public
    public function deleteImage(){
        if($this->foto && file_exists(public_path('images/wali/' . $this->foto))) {
            return unlink(public_path('images/wali/' . $this->foto));
        }
    }
}

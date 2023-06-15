<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
    use HasFactory;

    protected $table ="beranda";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','gambar','nama','jabatan_id','alamat', 'tgllhr'
    ];
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function uploadgambar()
    {
        return $this->belongsTo(Uploadgambar::class);
    }
}

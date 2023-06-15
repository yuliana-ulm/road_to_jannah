<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table ="pegawai";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama','jabatan_id','alamat', 'tgllhr'
    ];
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function beranda()
    {
        return $this->belongsTo(Beranda::class);
    }


}

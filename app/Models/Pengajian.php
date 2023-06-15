<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajian extends Model
{
    protected $table ="pengajian";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama_majelis','pimpinan_majelis','tanggal', 'alamat','link'
    ];
}

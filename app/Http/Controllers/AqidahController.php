<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class AqidahController extends Controller
{
    public function index()
    {
        $data['artikel'] = Artikel::where('kategori', 'aqidah')->get();
        return view('aqidah.daftar-aqidah', $data);
    }
}

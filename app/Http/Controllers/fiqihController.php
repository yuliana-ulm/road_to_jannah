<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\fiqih;
use Illuminate\Http\Request;

class fiqihController extends Controller
{
    public function index()
    {
        $data['artikel'] = Artikel::where('kategori', 'fiqih')->get();
        return view('fiqih.daftar-fiqih', $data);
    }

    public function detail($id)
    {
        $data['fiqih'] = fiqih::find($id);
        return view('fiqih', $data);
    }
}

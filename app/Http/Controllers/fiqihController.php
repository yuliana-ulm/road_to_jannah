<?php

namespace App\Http\Controllers;

use App\Models\fiqih;
use Illuminate\Http\Request;

class fiqihController extends Controller
{
    public function index()
    {
        $data['roadto'] = fiqih::all();
        return view('fiqih',$data);
    }

    public function detail($id)
    {
        $data['fiqih'] = fiqih::find($id);
        return view('fiqih',$data);
    }
}

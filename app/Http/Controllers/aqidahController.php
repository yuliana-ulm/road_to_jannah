<?php

namespace Controllers;

use App\Models\aqidah;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class aqidahController extends Controller
{
    // public function index()
    // {
    //     $data['roadto'] = aqidah::all();
    //     return view('aqidah',$data);
    // }

    // public function detail($id)
    // {
    //     $data['aqidah'] = aqidah::find($id);
    //     return view('aqidah',$data);
    // }
    public function index()
    {
        $materi = aqidah::all();

        return view('aqidah', compact('materi'));
    }
}

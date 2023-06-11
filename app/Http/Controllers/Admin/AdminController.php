<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $data['roadto'] = Admin::all();
        return view('admin',$data);
    }

    public function detail($id)
    {
        $data['admins'] = Admin::find($id);
        return view('detailAdmin',$data);
    }

}

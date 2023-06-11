<?php

namespace App\Http\Controllers;

use App\Models\Uploadgambar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UploadgambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataGambar = Uploadgambar::First()->get();
        return view('Uploadgambar.Data-gambar',compact('dataGambar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Uploadgambar/Create-gambar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

        $dtUpload = new Uploadgambar;
        $dtUpload->nama = $request->nama;
        $dtUpload->gambar = $namaFile;

        $nm->move(public_path().'/img', $namaFile);
        $dtUpload->save();

        return redirect('data-gambar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dt = Uploadgambar::findorfail($id);
        return view ('Uploadgambar.Edit-gambar',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ubah = Uploadgambar::findorfail($id);
        $awal = $ubah->gambar;

        $dt = [
            'nama' => $request['nama'],
            'gambar' => $awal,
        ];
        $request->gambar->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('data-gambar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Uploadgambar::findorfail($id);
        $file = public_path('/img/').$hapus->gambar;
        if (file_exists($file)){
            @unlink($file);
        }
        $hapus->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dtPegawai = Pegawai::with('jabatan')->paginate(0);
        $data['artikel'] = Artikel::all();
        return view('artikelAdmin.Data-artikel', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikelAdmin.Create-artikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Artikel::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'link' => $request->link
        ]);

        return redirect('data-artikel');
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
        $data['artikel'] = Artikel::findorfail($id);
        return view('artikelAdmin.Edit-artikel', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $query = Artikel::where('id', $id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'link' => $request->link
        ]);

        if ($query) {
            return redirect()->route('data-artikel');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = Artikel::where('id', $id)->delete();

        if ($query) {
            return redirect()->route('data-artikel');
        }
    }
}

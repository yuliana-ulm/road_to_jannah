<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajian;

class PengajianController extends Controller
{
    public function index()
    {
        $data['majelis'] = pengajian::all();
        return view('landingpage', $data);
    }

    public function show()
    {
        $data['pengajian'] = pengajian::all();
        return view('DataPengajian.Daftar-pengajian', $data);
    }

    public function create()
    {
        return view('DataPengajian.create-pengajian');
    }

    public function store(Request $request)
    {
        Pengajian::create([
            'nama_majelis' => $request->nama_majelis,
            'pimpinan_majelis' => $request->pimpinan_majelis,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'link' => $request->link
        ]);

        return redirect()->route('data-pengajian');
    }

    public function edit(string $id)
    {
        $data['pengajian'] = Pengajian::findorfail($id);
        return view('DataPengajian.Edit-pengajian', $data);
    }

    public function update(Request $request, string $id)
    {
        $query = Pengajian::where('id', $id)->update([
            'nama_majelis' => $request->nama_majelis,
            'pimpinan_majelis' => $request->pimpinan_majelis,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'link' => $request->link
        ]);

        if ($query) {
            return redirect()->route('data-pengajian');
        }
    }

    public function destroy(string $id)
    {
        $query = Pengajian::where('id', $id)->delete();

        if ($query) {
            return redirect()->route('data-pengajian');
        }
    }
}

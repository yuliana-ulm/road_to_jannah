<?php

namespace App\Http\Controllers;

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
        $dtPegawai = Pegawai::with('jabatan')->paginate(0);
        return view('Pegawai.Data-pegawai',compact('dtPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jab = Jabatan::all();
        return view('Pegawai.Create-pegawai',compact('jab'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Pegawai::create([
            'nama' => $request->nama,
            'jabatan_id' => $request->jabatan_id,
            'alamat' => $request->alamat,
            'tgllhr' => $request->tgllhr,
        ]);

        return redirect('data-pegawai');
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
        $jab = Jabatan::all();
        $peg = Pegawai::with('jabatan')->findorfail($id);
        return view('Pegawai.Edit-pegawai',compact('peg','jab'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = Pegawai::findorfail($id);
        $peg->update($request->all());

        return redirect('data-pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peg = Pegawai::findorfail($id);
        $peg->delete();

        return redirect('data-pegawai');
    }
}

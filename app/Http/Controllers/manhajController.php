<?php

namespace App\Http\Controllers;

use App\Models\manhaj;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class manhajController extends Controller
{
    public function index()
    {
        $materi = Pegawai::all();

        return view('manhaj', compact('materi'));
    }

    public function create()
    {
        $jab = manhaj::all();
        return view('.manhaj.manhaj-create',compact('jab'));
    }

    // public function index()
    // {
    //     // $data['mahasiswa'] = DB::select('SELECT * FROM mahasiswa');
    //     // return view('mahasiswa', $data);
    //     $data['mahasiswa'] = DB::table('mahasiswa')->get();
    //     return view('mahasiswa', $data);


    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('tambahMahasiswa');
    // }

    // public function store(Request $request)
    // {
    //     $nimInput = $request->input('nimInput');
    //     $namaInput = $request->input('namaInput');
    //     $prodiInput = $request->input('prodiInput');

        // dd($request->input(''));

        // $query = DB::table('mahasiswa')->insert([
        //     'nim' => $nimInput,
        //     'nama' => $namaInput,
        //     'prodi' => $prodiInput
        // ]);

        // if ($query) {
        //     return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
        // } else {
        //     return redirect()->route('mahasiswa')->with('failed', 'Data Gagal Ditambahkan');
        // }
    //}


    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $data['mahasiswa'] = DB::table('mahasiswa')->where('id', $id)->first();

    //     return view('editMahasiswa', $data);
    // }

    // public function update(Request $request, string $id)
    // {
    //     $nimInput = $request->input('nimInput');
    //     $namaInput = $request->input('namaInput');
    //     $prodiInput = $request->input('prodiInput');

    //     $query = DB::table('mahasiswa')->where('id', $id)->update([
    //         'nim' => $nimInput,
    //         'nama' => $namaInput,
    //         'prodi' => $prodiInput
    //     ]);

    //     if ($query) {
    //         return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Diupdate');
    //     } else {
    //         return redirect()->route('mahasiswa')->with('failed', 'Data Gagal Diupdate');
    //     }
    // }


    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     $query = DB::table('mahasiswa')->where('id', $id)->delete();

    //     if ($query) {
    //         return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Dihapus');
    //     } else {
    //         return redirect()->route('mahasiswa')->with('failed', 'Data Gagal Dihapus');
    //     }

    }

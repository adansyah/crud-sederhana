<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        $data = [
            'mahasiswa' => $mahasiswa
        ];
        return view('mahasiswa.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.tambah');
    }

    public function save(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jurusan' => $request->jurusan,
            $request->except(['_token']),
        ]);
        return redirect('mahasiswa'); //ini
    }

    public function show($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact(['mahasiswas']));
    }

    public function update($id, Request $request)
    {
        $mahasiswas = Mahasiswa::find($id);
        $mahasiswas->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jurusan' => $request->jurusan,
            $request->except(['_token']),
        ]);
        return redirect('mahasiswa'); //ini
    }

    public function destroy($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        $mahasiswas->delete();
        return redirect('mahasiswa'); //
    }
}

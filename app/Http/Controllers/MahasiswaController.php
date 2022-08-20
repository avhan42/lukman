<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = \App\Models\Mahasiswa::all();
        $jurusan = \App\Models\Jurusan::all();
        $angkatan = \App\Models\Angkatan::all();
        return view('mahasiswa.index', compact('mahasiswa', 'jurusan', 'angkatan'));
        
    }

    public function profile($nim)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa = $mahasiswa->where('nim', $nim)->first();
        $jurusan = \App\Models\Jurusan::all();
        $angkatan = \App\Models\Angkatan::all();
        return view('mahasiswa.profile', compact('mahasiswa', 'jurusan', 'angkatan'));
    }

    public function dashboard()
    {
        $mahasiswa = new Mahasiswa();
        $jurusan = new Jurusan();
        $jmlmahasiswa = $mahasiswa->count();
        $jmlwanita = $mahasiswa->where('jk', 'P')->count();
        $jmllaki = $mahasiswa->where('jk', 'p')->count();
        $jmljurusan = $jurusan->count();
        return view('mahasiswa.dashboard', compact('jmlmahasiswa', 'jmlwanita', 'jmllaki', 'jmljurusan'));
    }
   
        public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->email = $request->email;
        $mahasiswa->jk = $request->jk;
        $mahasiswa->id_jurusan = $request->id_jurusan;
        $mahasiswa->id_angkatan = $request->id_angkatan;
        $mahasiswa->save();
        return redirect()->route('listmahasiswa');
    }
}


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
   
  
}


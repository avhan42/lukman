<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $mahasiswa = new Mahasiswa();
        $jurusan = new Jurusan();
        $jmlmahasiswa = $mahasiswa->count();
        $jmlwanita = $mahasiswa->where('jk', 'P')->count();
        $jmllaki = $mahasiswa->where('jk', 'p')->count();
        $jmljurusan = $jurusan->count();
        return view('admin.index', compact('jmlmahasiswa', 'jmlwanita', 'jmllaki', 'jmljurusan'));
    }

    public function listmahasiswa()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa = $mahasiswa->all();
        $jurusan = \App\Models\Jurusan::all();
        $angkatan = \App\Models\Angkatan::all();
        return view('admin.listmahasiswa', compact('mahasiswa', 'jurusan', 'angkatan'));
    }

    public function listjurusan()
    {
        $jurusan = \App\Models\Jurusan::all();
        return view('admin.listjurusan', compact('jurusan'));
    }
    public function listangkatan()
    {
        $angkatan = \App\Models\Angkatan::all();
        return view('admin.listangkatan', compact('angkatan'));
    }

    public function createmahasiswa()
    {
        $jurusan = \App\Models\Jurusan::all();
        $angkatan = \App\Models\Angkatan::all();
        return view('admin.createmahasiswa', compact('jurusan', 'angkatan'));
    }
    public function storemahasiswa(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->email = $request->email;
        $mahasiswa->jk = $request->jk;
        $mahasiswa->id_jurusan = $request->id_jurusan;
        $mahasiswa->id_angkatan = $request->id_angkatan;
        $mahasiswa->save();
        // Simpan sebagai user juga
        $user = new User();
        $user->username = $request->nim;
        $user->password = bcrypt($request->nim);
        $user->level = '2';
        $user->save();
        return redirect()->route('listmahasiswa');
    }
    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $jurusan = \App\Models\Jurusan::all();
        $jur = \App\Models\Jurusan::find($mahasiswa->id_jurusan);
        $angkatan = \App\Models\Angkatan::all();
        $angk = \App\Models\Angkatan::find($mahasiswa->id_angkatan);
        return view('admin.editmahasiswa', compact('mahasiswa', 'jurusan', 'jur','angkatan', 'angk'));
    }
    public function updatemahasiswa(Request $request, $id)
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

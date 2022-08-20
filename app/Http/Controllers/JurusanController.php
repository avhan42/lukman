<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = \App\Models\Jurusan::all();
        return view('admin.listjurusan', compact('jurusan'));
    }

    public function create()
    {
        return view('admin.jurusancreate');
    }
    public function store(Request $request)
    {
        $jurusan = new Jurusan();
        $jurusan->kode_jurusan = $request->kd_jurusan;
        $jurusan->nama_jurusan = $request->jurusan;
        $jurusan->save();
        return redirect('/jurusan');
    }

    public function edit($id)
    {
        $jurusan = \App\Models\Jurusan::find($id);
        return view('admin.jurusanedit', compact('jurusan'));
    }
    public function update(Request $request, $id)
    {
        $jurusan = \App\Models\Jurusan::find($id);
        $jurusan->kode_jurusan = $request->kd_jurusan;
        $jurusan->nama_jurusan = $request->jurusan;
        $jurusan->save();
        return redirect('/jurusan');
    }
    public function destroy($id)
    {
        $jurusan = \App\Models\Jurusan::find($id);
        $jurusan->delete();
        return redirect('/jurusan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;

class AngkatanController extends Controller
{
    public function index()
    {
        $angkatan = \App\Models\Angkatan::all();
        return view('admin.listangkatan', compact('angkatan'));
    }
    public function create()
    {
        return view('admin.angkatancreate');
    }
    public function store(Request $request)
    {
        $angkatan = new Angkatan();
        $angkatan->angkatan = $request->angkatan;
        $angkatan->save();
        return redirect('/angkatan');
    }
    public function edit($id)
    {
        $angkatan = \App\Models\Angkatan::find($id);
        return view('admin.angkatanedit', compact('angkatan'));
    }
    public function update(Request $request, $id)
    {
        $angkatan = \App\Models\Angkatan::find($id);
        $angkatan->angkatan = $request->angkatan;
        $angkatan->save();
        return redirect('/angkatan');
    }
    public function destroy($id)
    {
        $angkatan = \App\Models\Angkatan::find($id);
        $angkatan->delete();
        return redirect('/angkatan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if($user = Auth::user()) {
            if($user->level == '1') {
                return redirect()->intended('/admin');
            }elseif($user->level == '2') {
                return redirect()->intended('/mahasiswa');
            }
        }
        return view('login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],
        [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $kredensial = $request->only('username', 'password');
        if(Auth::attempt($kredensial)){
            $request->session()->regenerate();

            $user = Auth::user();
            if($user->level == '1'){
                return redirect()->intended('admin');
            }elseif($user->level == '2'){   
                return redirect()->intended('mahasiswa');
            }
            return redirect()->intended('login');
        }
        return back()->withErrors(['username' => 'Username atau Password salah'])->onlyInput('username');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

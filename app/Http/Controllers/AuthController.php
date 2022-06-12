<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            if (Auth::user()->status == 'aktif') {
                Session::put('key', Auth::user()->role);
                Alert::success('Selamat Datang', 'Bismillahiroohmanirohim...');
                return redirect('/dashboard');
            }
            Auth::logout();
            Alert::warning('Astagfirullah', 'Akun anda belum aktif');
            return back();
        }
        Alert::error('Astagfirullah', 'Username/Password Salah');
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

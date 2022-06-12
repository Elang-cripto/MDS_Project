<?php

namespace App\Http\Controllers;

use App\Models\Datasiswa;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $db_all = Datasiswa::all()->count();
        $db_residu = Datasiswa::where('status', 'RESIDU')->count();
        $db_aktif = Datasiswa::where('status', 'AKTIF')->count();
        $db_nonaktif = Datasiswa::where('status', 'NONAKTIF')->count();

        return view('dashboard', [
            'db_all' => $db_all,
            'db_residu' => $db_residu,
            'db_aktif' => $db_aktif,
            'db_nonaktif' => $db_nonaktif,
            'title' => 'Dashboard'
        ]);
    }

    public function login()
    {
        return view('login');
    }

    public function jumlah()
    {
        return view('jumlah', [
            'title' => 'Jumlah'
        ]);
    }

    public function aktif()
    {
        return view('aktif', [
            'title' => 'Siswa Aktif'
        ]);
    }

    public function validasi()
    {
        return view('validasi', [
            'title' => 'Siswa Validasi'
        ]);
    }

    public function nonaktif()
    {
        return view('nonaktif', [
            'title' => 'Siswa Nonaktif'
        ]);
    }

    public function rombel()
    {
        return view('rombel', [
            'title' => 'Data Rombel'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

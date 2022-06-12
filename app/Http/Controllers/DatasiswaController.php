<?php

namespace App\Http\Controllers;

use App\Models\Datasiswa;
use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aktif', [
            'title' => 'Siswa Aktif',
            'data' => Datasiswa::where('status', '=', 'AKTIF')->get(),
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form_siswa()
    {
        return view('add', [
            'title' => 'Formulir',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validasi()
    {
        return view('validasi', [
            'title' => 'Siswa Validasi',
            'data' => Datasiswa::where('status', '=', 'RESIDU')->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nonaktif()
    {
        return view('nonaktif', [
            'title' => 'Siswa Nonaktif',
            'data' => Datasiswa::where('status', '=', 'NONAKTIF')->get(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datasiswa  $datasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(datasiswa $datasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datasiswa  $datasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(datasiswa $datasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datasiswa  $datasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datasiswa $datasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datasiswa  $datasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(datasiswa $datasiswa)
    {
        //
    }
}

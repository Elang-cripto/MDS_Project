<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use App\Http\Requests\StoreLembagaRequest;
use App\Http\Requests\UpdateLembagaRequest;

class LembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLembagaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLembagaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function show(Lembaga $lembaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Lembaga $lembaga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLembagaRequest  $request
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLembagaRequest $request, Lembaga $lembaga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lembaga $lembaga)
    {
        //
    }
}

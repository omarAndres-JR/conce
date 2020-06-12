<?php

namespace App\Http\Controllers;

use App\locacion;
use Illuminate\Http\Request;

class locacionConcesionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(locacion $locacion)
    {
        $concesionarios = $locacion->rela_concesionario;
        return $this->successResponse($concesionarios);
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
     * @param  \App\locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function show(locacion $locacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function edit(locacion $locacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, locacion $locacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(locacion $locacion)
    {
        //
    }
}

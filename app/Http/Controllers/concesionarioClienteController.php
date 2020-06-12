<?php

namespace App\Http\Controllers;

use App\concesionario;
use Illuminate\Http\Request;

class concesionarioClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(concesionario $concesionario)
    {
        $clientes = $concesionario->rela_cliente;
        return $this->successResponse($clientes);
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
     * @param  \App\concesionario  $concesionario
     * @return \Illuminate\Http\Response
     */
    public function show(concesionario $concesionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\concesionario  $concesionario
     * @return \Illuminate\Http\Response
     */
    public function edit(concesionario $concesionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\concesionario  $concesionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, concesionario $concesionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\concesionario  $concesionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(concesionario $concesionario)
    {
        //
    }
}

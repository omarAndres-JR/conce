<?php

namespace App\Http\Controllers;

use App\concesionario;
use Illuminate\Http\Request;

class concesionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concesionarios = concesionario::all();
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
          
        $rules = [
          
            'cliente_id'=>'required',
            'proveedor_id'=>'required',
            'marca_id'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'email'=>'required|email'
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $concesionario = concesionario::create($campos);

        return $concesionario;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\concesionario  $concesionario
     * @return \Illuminate\Http\Response
     */
    public function show(concesionario $concesionario)
    {
        return $concesionario;
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

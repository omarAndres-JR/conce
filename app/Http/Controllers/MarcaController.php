<?php

namespace App\Http\Controllers;

use App\marca;
use Illuminate\Http\Request;

class marcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = marca::all();
        return $this->successResponse($marcas);
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
          
            'nombre'=>'required',
            'categoria'=>'required',
            'num_referencia'=>'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $marca = marca::create($campos);

        return $marca;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(marca $marca)
    {
        return $marca;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, marca $marca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(marca $marca)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\locacion;
use Illuminate\Http\Request;

class locacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locacions = locacion::all();
        return $this->successResponse($locacions);
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
          
            'latitud'=>'required',
            'longitud'=>'required',
            
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $locacion = locacion::create($campos);

        return $locacion;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function show(locacion $locacion)
    {
        return $locacion;
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
        $rules = [
            'latitud'=>'required',
            'longitud'=>'required',
        ];
        $this->validate($request,$rules);
        $locacion->fill($request->all());

        if($locacion->isClean()){
            return $this->errorResponse("No se hicieron cambios",422);
        }

        //dd($request);

        $locacion->save();
        
        return $this->successResponse($locacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\locacion  $locacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(locacion $locacion)
    {
        $locacion->delete();
        return $this->successResponse($locacion);
    }
}

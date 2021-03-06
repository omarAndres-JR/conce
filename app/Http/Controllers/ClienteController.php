<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::all();
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
        $rules = [
          
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'required',
            'email'=>'required|email'
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $cliente = cliente::create($campos);

        return $cliente;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        $rules = [
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'required',
            'email'=>'required|email'
        ];
        $this->validate($request,$rules);
        $cliente->fill($request->all());

        if($cliente->isClean()){
            return $this->errorResponse("No se hicieron cambios",422);
        }

        //dd($request);

        $cliente->save();
        
        return $this->successResponse($cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return $this->successResponse($cliente);
    }
}

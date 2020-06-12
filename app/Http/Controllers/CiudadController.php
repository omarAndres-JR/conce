<?php

namespace App\Http\Controllers;

use App\ciudad;
use Illuminate\Http\Request;

class ciudadController extends Controller
{
    public function __construct(){
        $this->middleware('client-credentials');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $ciudads = ciudad::all();
        return $this->successResponse($ciudads);
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
            'identificador'=>'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $ciudad = ciudad::create($campos);

        return $ciudad;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(ciudad $ciudad)
    {
        return $ciudad;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(ciudad $ciudad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ciudad $ciudad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(ciudad $ciudad)
    {
        //
    }
}

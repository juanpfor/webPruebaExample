<?php

namespace App\Http\Controllers;

use App\Models\Colegio;
use Illuminate\Http\Request;

class ColegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colegios = Colegio::all();
        return view("Colegios.listar",['colegioclave'=>$colegios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Colegios.registrar",['texto' => 'hola']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $colegio = new Colegio;

        $colegio->nombre = $request->nombre;
        $colegio->direccion = $request->direccion;
        $colegio->telefono = $request->telefono;

        $colegio->id_convenio = $request->id_convenio;
        $colegio->id_secretaria = $request->id_secretaria;

        $colegio->save();
        return redirect()->route('vitacolegioregister', ['alertMensaje'=> true] );


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function show(Colegio $id)
    {
        $val = Colegio::find($id);

        return view('Colegios.detalle', compact('val'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function edit(Colegio $colegio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colegio $colegio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colegio $colegio)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\Vivienda;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $Vivienda = Vivienda::all();
        $Paquete = Paquete::all();

        return view('Paquete.index', compact('Paquete','Vivienda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $Paquete = Paquete::all();
        $vivienda = vivienda::all();

        return view('Paquete.Create', compact('Paquete','vivienda')); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paquete = new Paquete();
         
        $paquete->destinatario = $request->get('destinatario');
        $paquete->vivienda_id = $request->get('vivienda_id');
           $paquete->recibido_por = $request->get('recibido_por');
           $paquete->entregado_a = $request->get('entregado_a');
           $paquete->estado = $request->get('estado');

           $paquete->save();
           return redirect()->route('Paquete.index');//
    }

    /**
     * Display the specified resource.
     */
    public function show(Paquete $paquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paquete $paquete, $id)
    {
        $paquete = Paquete::find($id);
        $vivienda = vivienda::all();
        return view ("Paquete.edit",compact('paquete','vivienda'));  //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paquete $paquete, $id)
    {
        $paquete = Paquete::find($id);
         
        $paquete->destinatario = $request->get('destinatario');
        $paquete->vivienda_id = $request->get('vivienda_id');
           $paquete->recibido_por = $request->get('recibido_por');
           $paquete->entregado_a = $request->get('entregado_a');
           $paquete->estado = $request->get('estado');

           $paquete->save();
           return redirect()->route('Paquete.index'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paquete $paquete, $id)
    {
      
        $paquete = Paquete::find($id);
        $paquete->delete();
        return redirect()->route('Paquete.index');  //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residente;

class ResidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Residente = Residente::all();
        
        return view('Residente.index', compact('Residente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Residente.Create'); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $residente = new Residente();
         
        $residente->nombre = $request->get('nombre');
           $residente->movil = $request->get('movil');
           $residente->vivienda_id = $request->get('vivienda id');
           $residente->Propietario = $request->get('Propietario');
           $residente->nombre_propietario = $request->get('nombre propietario');
           $residente->movil_propietario = $request->get('movil propietario');
           $residente->email_propietario = $request->get('email propietario');
           $residente->estado = $request->get('estado');

           $residente->save();
           return redirect()->route('Residente.index'); //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $residente = Residente::find($id);
        return view ("Residente.edit",compact('residente'));  //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $residente = Residente::find($id);
         
        $residente->nombre = $request->get('nombre');
        $residente->movil = $request->get('movil');
        $residente->vivienda_id = $request->get('vivienda id');
        $residente->Propietario = $request->get('Propietario');
        $residente->nombre_propietario = $request->get('nombre propietario');
        $residente->movil_propietario = $request->get('movil propietario');
        $residente->email_propietario = $request->get('email propietario');
        $residente->estado = $request->get('estado');
        $residente->remember_token = $request->get('remember_token');

           $residente->save();
           return redirect()->route('Residente.index'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $residente = Residente::find($id);
        $residente->delete();
        return redirect()->route('Residente.index'); //
    }
}

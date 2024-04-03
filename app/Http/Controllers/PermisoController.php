<?php

namespace App\Http\Controllers;
use App\Models\Vivienda;
use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Permiso = Permiso::all();
        $Vivienda = Vivienda::all();
        
        return view('Permiso.index', compact('Permiso','Vivienda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $Permiso = Permiso::all();
        $Vivienda = Vivienda::all();
    
        return view('Permiso.Create', compact('Permiso','Vivienda')); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $permiso = new Permiso();
         
        $permiso->nombre_visitante = $request->get('nombre_visitante');
           $permiso->documento_visitante = $request->get('documento visitante');
           $permiso->estado = $request->get('estado');

           $permiso->save();
           return redirect()->route('Permiso.index');  //
    }

    /**
     * Display the specified resource.
     */
    public function show(Permiso $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permiso $permiso, $id)
    {
        $Permiso = Permiso::with('vivienda')->findOrFail($id);
        $viviendas = Vivienda::all();

    return view('Paquete.edit', compact('Permiso', 'viviendas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permiso $permiso, $id)
    {
        $permiso = Permiso::find($id);
         
        $permiso->nombre_visitante = $request->get('nombre_visitante');
           $permiso->documento_visitante = $request->get('documento visitante');
           $permiso->estado = $request->get('estado');

           $permiso->save();
           return redirect()->route('Permiso.index'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permiso $permiso, $id)
    {
        $permiso = Permiso::find($id);
        $permiso->delete();
        return redirect()->route('Permiso.index');   //
    }
}

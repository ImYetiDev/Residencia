<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\ZonasComun;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Reserva = Reserva::all();
        $zonasComun = zonasComun::all();
        
        return view('Reserva.index', compact('Reserva', 'zonasComun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Reserva.Create');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserva = new Reserva();
         
        $reserva->zona_comun_id = $request->get('zona_comun_id');
           $reserva->fecha_reserva = $request->get('fecha_reserva');
           $reserva->hora_reserva = $request->get('hora_reserva');
           $reserva->estado = $request->get('estado');

           $reserva->save();
           return redirect()->route('Reserva.index'); //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva, $id)
    {
        $reserva = Reserva::find($id);
        return view ("Reserva.edit",compact('reserva')); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva, $id)
    {
        $reserva = Reserva::find($id);
         
        $reserva->zona_comun_id = $request->get('zona_comun_id');
        $reserva->fecha_reserva = $request->get('fecha_reserva');
        $reserva->hora_reserva = $request->get('hora_reserva');
        $reserva->estado = $request->get('estado');

           $reserva->save();
           return redirect()->route('Reserva.index'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva, $id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect()->route('Reserva.index'); //
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\ZonasComun;
use Illuminate\Http\Request;

class ZonasComunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zonasComun = ZonasComun::all();
        
        return view('ZonasComun.index', compact('zonasComun',));  //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ZonasComun.Create'); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $zonascomun = new ZonasComun();
         
        $zonascomun->nombre = $request->get('nombre');
        $zonascomun->estado = $request->get('estado');

           $zonascomun->save();
           return redirect()->route('ZonasComun.index'); //
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
        $zonascomun = ZonasComun::find($id);
        return redirect()->route('ZonaComun.edit');    //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $zonascomun = ZonasComun::find($id);
         
        $zonascomun->nombre = $request->get('nombre');
        $zonascomun->estado = $request->get('estado');

           $zonascomun->save();
           return redirect()->route('ZonasComun.index'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $zonascomun = ZonasComun::find($id);
        $zonascomun->delete();
        return redirect()->route('ZonasComun.index'); //
    }
}

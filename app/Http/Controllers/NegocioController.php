<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
use Illuminate\Http\Request;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $negocios = Negocio::all();
        return view('negocio.index', compact('negocios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $negocios = new Negocio;
        return view('negocio.create', compact('negocios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $negocios = new Negocio;
        $negocios->nombre = $request->nombre;
        $negocios->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Negocio $negocio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Negocio $negocio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Negocio $negocio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Negocio $negocio)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use App\Models\Producto;
use App\Models\Negocio;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $negocios = Negocio::all();
        $productos = Producto::all();
        
        return view('ventas.index', compact('negocios', 'productos'));
    }
    


    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $negocios = Negocio::all();
        $productos = Producto::all();
        
        return view('ventas.index', compact('negocios', 'productos', 'ventas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $ventas = new ventas;   
     $ventas->negocio_id = $request->negocio;
     $ventas->producto_id = $request->producto;
     $ventas->cantidad = $request->cantidad;
     $ventas->precio_total = $request->precioTotal;
     $ventas->save();
     return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ventas $ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ventas $ventas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ventas $ventas)
    {
        //
    }
}

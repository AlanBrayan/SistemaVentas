<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Negocio;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view ('producto.index', compact('productos'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = new Producto;
        $negocios = Negocio::all(); 
    
        return view('producto.create', compact('negocios'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
    {

        $request -> validate ([
            'nombre' => 'required',
            'precio' => 'required',
            'imagen' => 'required|image',
            'negocio_id' => 'required'
         ]);


        //Recuperar datos del formulario para guardarlos en la base de datos
        $productos = new Producto;
        $productos->nombre=$request->nombre;
        $productos->precio=$request->precio;
        $productos->negocio_id=$request->negocio_id;
        //Agregar imagen y guardar ruta y nombre en la base de datos
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombreImagen = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/', $nombreImagen);
            $productos->imagen = $nombreImagen;
        }
        //Guardar datos y retornar a misma vista usando back
        $productos->save();
        return redirect()->back();
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}

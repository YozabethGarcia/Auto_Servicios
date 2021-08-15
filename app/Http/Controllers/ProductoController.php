<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\tipo_producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::paginate();
        //['productos' => $productos] equivale a compact('productos')
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipoproducto = tipo_producto::all();
        return view('productos.create', compact('tipoproducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'codigo' => 'required',
            'descripcion' => 'required',
            'valor' => 'required',
            'valormin' => 'required',
            'valormax' => 'required',
            'precio' => 'required',
            'ubicacion' => 'required',
            'tproducto' => 'required'
        ]);

        $iproducto = new producto;
        $iproducto->barcode=$request->codigo;
        $iproducto->descripcion=$request->descripcion;
        $iproducto->stock=$request->valor;
        $iproducto->min_stock=$request->valormin;
        $iproducto->max_stock=$request->valormax;
        $iproducto->precio=$request->precio;
        $iproducto->ubicacion=$request->ubicacion;
        $iproducto->tipo_producto_id=$request->tproducto;
        $iproducto->foto=$request->foto;
        $iproducto->save();

        return redirect()->route('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
        return $producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //        
        $tipoproducto = tipo_producto::all();
        return view('productos.edit', compact('producto', 'tipoproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        $request->validate([
            'codigo' => 'required',
            'descripcion' => 'required',
            'valor' => 'required',
            'valormin' => 'required',
            'valormax' => 'required',
            'precio' => 'required',
            'ubicacion' => 'required',
            'tproducto' => 'required'
        ]);

        $producto->barcode=$request->codigo;
        $producto->descripcion=$request->descripcion;
        $producto->stock=$request->valor;
        $producto->min_stock=$request->valormin;
        $producto->max_stock=$request->valormax;
        $producto->precio=$request->precio;
        $producto->ubicacion=$request->ubicacion;
        $producto->tipo_producto_id=$request->tproducto;
        $producto->foto=$request->foto;
        $producto->save();
        
        return redirect()->route('productos');
    }

    public function destroy(producto $producto)
    {
        //
        return "destroy";
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Models\proveedor;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compras = compra::paginate();
        return view('compras.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedores = proveedor::all();
        return view("compras.create", compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'fecha' => 'required',
            'factura' => 'required',
            'subtotal' => 'required',
            'descuento' => 'required',
            'isv' => 'required',
            'total' => 'required',
            'proveedor' => 'required',
            'cai' => 'required',
            'caee' => 'required'
        ]);

        $compra = new compra;
        $compra->fecha=$request->fecha;
        $compra->factura=$request->factura;
        $compra->subtotal=$request->subtotal;
        $compra->descuento=$request->descuento;
        $compra->isv=$request->isv;
        $compra->total=$request->total;
        $compra->caee=$request->caee;
        $compra->cai=$request->cai;
        $compra->proveedor_id=$request->proveedor;
        $compra->save();

        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(compra $compra)
    {
        //
        $proveedores = proveedor::all();
        return view("compras.edit", compact('proveedores', 'compra'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compra $compra)
    {
        //
        $request->validate([
            'fecha' => 'required',
            'factura' => 'required',
            'subtotal' => 'required',
            'descuento' => 'required',
            'isv' => 'required',
            'total' => 'required',
            'proveedor' => 'required',
            'cai' => 'required',
            'caee' => 'required'
        ]);

        $compra->fecha=$request->fecha;
        $compra->factura=$request->factura;
        $compra->subtotal=$request->subtotal;
        $compra->descuento=$request->descuento;
        $compra->isv=$request->isv;
        $compra->total=$request->total;
        $compra->total=$request->total;
        $compra->caee=$request->caee;
        $compra->proveedor_id=$request->proveedor;
        $compra->save();

        return redirect()->route('compras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(compra $compra)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\venta;
use App\Models\facturacione;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = venta::paginate();
        return view("ventas.index", compact('ventas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $resultado = facturacione::all();
                
        $cai = $resultado[0];
        if($cai->ultima_generada < 10){
            $ceros = "0000000";
        }elseif ($cai->ultima_generada < 100){
            $ceros = "000000";
        }elseif ($cai->ultima_generada < 1000){
            $ceros = "00000";
        }elseif ($cai->ultima_generada < 10000){
            $ceros = "0000";
        }elseif ($cai->ultima_generada < 100000){
            $ceros = "000";
        }elseif ($cai->ultima_generada < 1000000){
            $ceros = "00";
        }elseif ($cai->ultima_generada < 10000000){
            $ceros = "0";
        }else{
            $ceros = "";
        }
    
        $factura = "001-01-" . $ceros . $cai->ultima_generada + 1;

        return view("ventas.create", compact('factura', 'cai'));
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

        $factura = facturacione::find(1);        

        $request->validate([
            'fecha' => 'required',            
            'factura' => 'required',
            'cliente' => 'required',            
            'subtotal' => 'required',
            'descuento' => 'required',
            'isv' => 'required',
            'total' => 'required'
        ]);

        $venta = new venta;
        $venta->fecha=$request->fecha;
        $venta->cai=$factura->cai;
        $venta->caee="ASDH72HD8AW";
        $venta->factura=$request->factura;
        $venta->cliente=$request->cliente;
        $venta->rtn=$request->rtn;
        $venta->subtotal=$request->subtotal;
        $venta->descuento=$request->descuento;
        $venta->isv=$request->isv;
        $venta->total=$request->total;        
        $venta->save();
        
        $factura->ultima_generada++;
        $factura->save();
        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta $venta)
    {
        //
    }
}

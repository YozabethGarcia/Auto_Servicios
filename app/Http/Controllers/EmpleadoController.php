<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;
use App\Models\cargo;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = Empleado::paginate();
        return view("empleados.index", compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cargos = cargo::all();
        return view("empleados.create", compact('cargos'));
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
            'pnombre' => 'required',
            'papellido' => 'required',
            'identidad' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'cargos' => 'required'
        ]);

        $empleado = new empleado;
        $empleado->pnombre=$request->pnombre;
        $empleado->snombre=$request->snombre;
        $empleado->papellido=$request->papellido;
        $empleado->sapellido=$request->sapellido;
        $empleado->identidad=$request->identidad;
        $empleado->telefono=$request->telefono;
        $empleado->email=$request->email;
        $empleado->direccion=$request->direccion;
        $empleado->foto_url=$request->foto;
        $empleado->estado=1;
        $empleado->cargo_id=$request->cargos;
        $empleado->save();

        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        //
        $cargos = cargo::all();
        return view('empleados.edit', compact('empleado', 'cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
    {
        //
        $request->validate([
            'pnombre' => 'required',
            'papellido' => 'required',
            'identidad' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'cargos' => 'required'
        ]);
        
        $empleado->pnombre=$request->pnombre;
        $empleado->snombre=$request->snombre;
        $empleado->papellido=$request->papellido;
        $empleado->sapellido=$request->sapellido;
        $empleado->identidad=$request->identidad;
        $empleado->telefono=$request->telefono;
        $empleado->email=$request->email;
        $empleado->direccion=$request->direccion;
        $empleado->foto_url=$request->foto;
        $empleado->estado=1;
        $empleado->cargo_id=$request->cargos;
        $empleado->save();

        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        //
    }
}

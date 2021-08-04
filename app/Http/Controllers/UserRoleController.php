<?php

namespace App\Http\Controllers;

use App\Models\user_role;
use App\Models\venta;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ventas = venta::all();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_role  $user_role
     * @return \Illuminate\Http\Response
     */
    public function show(user_role $user_role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_role  $user_role
     * @return \Illuminate\Http\Response
     */
    public function edit(user_role $user_role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_role  $user_role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_role $user_role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_role  $user_role
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_role $user_role)
    {
        //
    }
}

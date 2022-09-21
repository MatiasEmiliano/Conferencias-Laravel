<?php

namespace App\Http\Controllers;

use App\Models\conferencia;
use Illuminate\Http\Request;

class ConferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferencias = Conferencia::all();
        return view('conferencias',compact('conferencias'));
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
     * @param  \App\Models\conferencia  $conferencia
     * @return \Illuminate\Http\Response
     */
    public function show(conferencia $conferencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\conferencia  $conferencia
     * @return \Illuminate\Http\Response
     */
    public function edit(conferencia $conferencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\conferencia  $conferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conferencia $conferencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\conferencia  $conferencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(conferencia $conferencia)
    {
        //
    }
}

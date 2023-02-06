<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorearmadaRequest;
use App\Http\Requests\UpdatearmadaRequest;
use App\Models\Armada;


class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armadas = Armada::all();

        return view('katalog', [
            "title" => "Katalog",
            "armadas" => $armadas
        ]);
    }

    public function indexcars()
    {
        $armadas = Armada::all();

        return view('/admin/cars', [
            "title" => "Cars",
            "armadas" => $armadas
        ]);
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
     * @param  \App\Http\Requests\StorearmadaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearmadaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function show(armada $armada)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function edit(armada $armada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearmadaRequest  $request
     * @param  \App\Models\armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearmadaRequest $request, armada $armada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function destroy(armada $armada)
    {
        //
    }
}

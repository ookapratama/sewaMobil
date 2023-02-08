<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretestimoniRequest;
use App\Http\Requests\UpdatetestimoniRequest;
use App\Models\testimoni;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = testimoni::all();
        return view('testimoni', [
            "title" => "Testimoni",
            "testimonis" => $testimonis
        ]);
    }

    public function indextestimoni()
    {
        $testimonis = testimoni::all();
        return view('/admin/review', [
            "title" => "Testimoni",
            "testimonis" => $testimonis
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
     * @param  \App\Http\Requests\StoretestimoniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretestimoniRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetestimoniRequest  $request
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetestimoniRequest $request, testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimoni $testimoni)
    {
        //
    }

    public function testi_moni(Request $request) {

        

    }
}

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
        $data = array(
            "title"     => "Cars",
            'armadas'   => $armadas
        );

        return view('/admin/cars', $data);
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
        $data = $request->all();
        
        // $picture = $request->file('picture_url');
        $nama = time() . '.' . $request->picture_url->extension();
        // dd($nama);
        $request->picture_url->move(public_path('image/cars/'), $nama);
        $data['picture_url'] = $nama;

        Armada::create($data);
        // dd($request);
        return redirect()->route('cars.index');
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
    public function edit($id)
    {
        $car = Armada::find($id);
           
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
    public function destroy($id)
    {
        $find = Armada::find($id);
        $find->delete();
        return redirect()->route('cars.index');  
    }
}

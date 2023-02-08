<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretestimoniRequest;
use App\Http\Requests\UpdatetestimoniRequest;
use App\Models\Armada;
use App\Models\testimoni;
use Illuminate\Http\Request;

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
    public function edit($id)
    {
        $car = Armada::all();
        $testi = testimoni::find($id);
        return response()->json([
            'car'   => $car,
            'testi' => $testi,
            'status' => 200
        ]);
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
    public function destroy($id)
    {
        $find = testimoni::find($id);
        $find->delete();
        return redirect()->route('testi.index');  
    }

    public function testi_user() {

        $data = array(
            'car' => $car = Armada::all(),
            'title' => 'Add Testimoni'
        );       
        return view('add_testimoni', $data);

    }
    public function testi_user_add(Request $request) {

        $data = $request->all();
        
        testimoni::create($data);
        // dd($request);
        return redirect()->route('testi');

    }
}

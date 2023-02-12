<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredriverRequest;
use App\Http\Requests\UpdatedriverRequest;
use App\Models\Armada;
use App\Models\driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = driver::all();
        $armada = Armada::where('status', 'available')->get();
        return view('/admin/driver', [
            "title" => "Driver",
            "drivers" => $drivers,
            "armada"    => $armada
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
     * @param  \App\Http\Requests\StoredriverRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request->all());
        $request->validate([
            'phone' => 'numeric|required',
            'name' => 'required'
        ]);
        $data = $request->all();
        // dd($data);
        // $data['status'] = 'booked';
        driver::create($data);
        // dd($request);
        return redirect()->route('driver.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = driver::find($id);
        return response()->json([
            'driver' => $driver,
            'status' => 200
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedriverRequest  $request
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $find =  driver::find($request->id);
        
        $find->update($data);
        // dd($request);
        return redirect()->route('driver.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = driver::find($id);
        $find->delete();
        return redirect()->route('driver.index');  
    }
}

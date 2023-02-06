<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredriverRequest;
use App\Http\Requests\UpdatedriverRequest;
use App\Models\driver;

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
        return view('/admin/driver', [
            "title" => "Driver",
            "drivers" => $drivers
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
    public function store(StoredriverRequest $request)
    {
        //
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
    public function edit(driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedriverRequest  $request
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedriverRequest $request, driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(driver $driver)
    {
        //
    }
}

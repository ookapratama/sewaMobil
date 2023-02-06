<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use App\Models\user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // eloquent
        $users = user::all();
        return view('/admin/users', [
            "title" => "Users",
            "user" => $users
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuseraccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuseraccountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\useraccount  $useraccount
     * @return \Illuminate\Http\Response
     */
    public function show(useraccount $useraccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\useraccount  $useraccount
     * @return \Illuminate\Http\Response
     */
    public function edit(useraccount $useraccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuseraccountRequest  $request
     * @param  \App\Models\useraccount  $useraccount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuseraccountRequest $request, useraccount $useraccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\useraccount  $useraccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(useraccount $useraccount)
    {
        //
    }
}

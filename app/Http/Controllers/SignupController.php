<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup',[
        "title" => "Sign Up"
        ]);
    }

    public function store (Request $request) {

        $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        // dd($request);
        $data = $request->all();

        User::create($data);
        return redirect(route('login'));

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgetController extends Controller
{
    public function index()
    {
        return view('forget',[
        "title" => "Forget Password"
        ]);
    }

    public function re_pass (Request $request) {
        // dd($request);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'new_password' => 'required|same:password'
        ]);

        $find = User::where('email', $request->email)->first();
        // dd($find);
        $find['password'] = Hash::make($request->password);
        $find->save();
        return redirect()->route('login');

    }
}

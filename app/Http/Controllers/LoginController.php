<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;   

class LoginController extends Controller
{
    public function index()
    {
        return view('login',[
        "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd($request);
        $user = User::where('email', $request->email)->first();
        // dd($user);
        if($request->email == $user->email)
        {
            $request->session()->regenerate();
            $user = User::where('email', $request->email)->first();
            // dd($user);
            $id         = $request->session()->put('id', $user->id);
            $username   = $request->session()->put('username', $user->username);
            $nama       = $request->session()->put('email', $user->email);

            return redirect()->route('dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

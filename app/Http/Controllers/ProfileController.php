<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        return view('/useraccount_profile', 
        [
            "title" => "User Profile",
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile($id_user, $id_trans) {
        // dd(transaction::find($id_trans));
        return view('useraccount_profile', 
        [
            "title" => "User Profile",
            "user"  => User::find($id_user),
            "trans"  => transaction::find($id_trans)
        ]);
    }
    public function transaksi($id_trans) {
        // dd($id);
        $find = transaction::find($id_trans);
        // dd($find);
        // $trans = $find->sortByDesc('id')->take(1);
        return view('useraccount_transaction', 
        [
            "title" => "User Transaction",
            "trans"  => $find,
            "user"  => $id_trans,
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile( $id_user, $id_trans) {
        // dump(transaction::find($id_trans));
        // dd($request->id_trans);
        return view('useraccount_profile', 
        [
            "title" => "User Profile",
            "user"  => User::find($id_user),
            "trans"  => transaction::find($id_trans),
            'id_trans' => $id_trans 
        ]);
    }
    public function transaksi($id_user, $id_trans) {
        // dd($id);
        $find = transaction::where('user_id', $id_user)->get();
        // dd($find);
        // $trans = $find->sortByDesc('id')->take(1);
        return view('useraccount_transaction', 
        [
            "title" => "User Transaction",
            "trans"  => $find,
            "id_trans"  => $id_trans,
            "user"  => User::find($id_user),
        ]);
    }

    public function invoice($id_user, $id_trans) {
        // dd($id_user);
        $find =  transaction::where('user_id', $id_user)->get();
        $inv = transaction::all();
        return view('useraccount_invoice', 
        [
            "title" => "User Invoice",
            "trans"  => $find,
            "id_trans"  => $id_trans,
            "user"  => User::find($id_user),
            'invoice' => $inv
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Armada;


class DashboardController extends Controller
{

    public function index(){
        $armadas = Armada::all();
        // $masuk = Letter::where('letter_type', 'Surat Masuk')->get()->count();
        // $keluar = Letter::where('letter_type', 'Surat Keluar')->get()->count();

        return view('admin.dashboard', [
            "title" => "Dashboard",
            "armadas" => $armadas

        ]);
    }
}

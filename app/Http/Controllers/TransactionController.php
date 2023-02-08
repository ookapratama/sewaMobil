<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretransactionRequest;
use App\Http\Requests\UpdatetransactionRequest;
use App\Models\Armada;
use App\Models\transaction;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = transaction::all();
        $armada = Armada::where('status', 'available')->get();
        return view('/admin/transaction', [
            "title" => "Transaction",
            "transactions" => $transactions,
            "armadas" => $armada
        ]
        );
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
     * @param  \App\Http\Requests\StoretransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretransactionRequest $request)
    {
        // dd($request->bookingcode);
        $data = $request->all();
        $namaInvoice = time() . '.' . $request->dp_invoice->extension();
        $namaKtp = time() . '.' . $request->ktp->extension();
        $namaSim = time() . '.' . $request->sim->extension();
        // dd($nama);
        $request->dp_invoice->move(public_path('image/invoice/'), $namaInvoice);
        $request->ktp->move(public_path('image/ktp/'), $namaKtp);
        $request->sim->move(public_path('image/sim/'), $namaSim);

        $data['dp_invoice'] = $namaInvoice;
        $data['ktp'] = $namaKtp;
        $data['sim'] = $namaSim;
        // $data['bookingcode'] += 1;

        transaction::create($data);
        return redirect()->route('katalog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find = transaction::find($id);
        $data = array(
            'title' => 'Transaction Detail',
            'transaksi' => $find
        );
        return view('admin.transaction_id', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trans = transaction::find($id);
        return response()->json([
            'trans' => $trans,
            'status' => 200
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransactionRequest  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransactionRequest $request)
    {
        $find = transaction::find($request->id);
        $find_armada = Armada::find($request->armada_id);
        $data = $request->all();
        $find_armada['status'] = 'booked';
        $find['status'] = 'success';

        $find_armada->update($data);
        $find->update($data);

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_armada)
    {
        // dd($id_armada);
        $find_armada = Armada::find($id_armada);
        $find_armada['status'] = 'available';
        $find = transaction::find($id);

        $find_armada->update();
        $find->delete();
        return redirect()->route('transaksi.index');  
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretransactionRequest;
use App\Http\Requests\UpdatetransactionRequest;
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
        return view('/admin/transaction', [
            "title" => "Transaction",
            "transactions" => $transactions
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
        $namaInvoice = time() . '.' . $request->invoice->extension();
        $namaKtp = time() . '.' . $request->ktp->extension();
        $namaSim = time() . '.' . $request->sim->extension();
        // dd($nama);
        $request->invoice->move(public_path('image/invoice/'), $namaInvoice);
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
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransactionRequest  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransactionRequest $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}

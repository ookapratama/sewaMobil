@extends('layouts.main_admin')

@section('adminpage')

<!-- Main page content-->
<div class="container-fluid px-4">
    <div class="row gx-4">
        <div class="col-lg-7">
            <div class="card mb-4">
                <a class="card-header" href="/transaction"> Back To Transaction </a>
                <div class="card-body">
                    <div class="mb-3 row">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID Transaction</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Nama </th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Nomor Telepon</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Armada</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Start Date</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>End Date</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Total Transaksi</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>KTP</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>SIM</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Status Transaksi</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card mb-4">
                <div class="card-header">
                    Bukti Pembayaran
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <embed src="/image/car2.jpg" width="500" height="375" type="">
                        {{-- <embed src="{{ Storage::url($transaction->additional) }}" width="500" height="375" type="application/jpeg"> --}}
                    </div>
                    <button class="btn btn-primary">Approved Pembayaran</button>
                    {{-- click approved (status transaksi berubah dari pending -> success ) --}}
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footerAdmin')

@endsection

@extends('layouts.main_admin')

@section('adminpage')
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="row gx-4">
            <div class="col-lg-7">
                <div class="card mb-4">
                    <a class="card-header" href="{{ route('transaksi.index') }}"> Back To Transaction </a>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <form action="{{ route('transaksi.update') }}" method="post" >
                                {{ method_field('put') }}
                                @csrf
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <input type="hidden" name="id" value="{{ $transaksi->id }}">
                                            <input type="hidden" name="armada_id" value="{{ $transaksi->armada->id }}">
                                            <th>ID Transaction</th>
                                            <td> <b> {{ $transaksi->bookingcode }} </b></td>
                                        </tr>
                                        <tr>
                                            <th>Nama </th>
                                            <td>{{ $transaksi->fullname }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Telepon</th>
                                            <td>{{ $transaksi->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Armada</th>
                                            <td>{{ $transaksi->armada->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Start Date</th>
                                            <td>{{ $transaksi->start_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>End Date</th>
                                            <td>{{ $transaksi->end_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{ $transaksi->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Transaksi</th>
                                            <td> Rp. {{ number_format($transaksi->total, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <th>KTP</th>
                                            {{-- bagaimana caranya dilihat isinya --}}
                                            <td>{{ $transaksi->ktp }}</td>
                                        </tr>
                                        <tr>
                                            <th>SIM</th>
                                            {{-- bagaimana caranya dilihat isinya --}}
                                            <td>{{ $transaksi->sim }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status Transaksi</th>
                                            <td><button class="btn btn-primary"> {{ $transaksi->status }} </button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    {{-- Approved Pembayaran (Status pending -> success) --}}
                                    <button class="btn btn-primary" value="success" name="btn" type="submit">Approved Pembayaran</button>
                                    {{-- Completed Transaction (Status success -> completed) --}}
                                    <button class="btn btn-success" value="completed" name="btn" type="submit">Completed Transaction</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-header">
                        File Uploaded
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <embed src="{{ asset('image/invoice/' . $transaksi->dp_invoice) }}" width="500"
                                height="375" type="">
                            {{-- <embed src="{{ Storage::url($transaction->additional) }}" width="500" height="375" type="application/jpeg"> --}}
                        </div>
                        <div class="mb-3 row">
                            <embed src="{{ asset('image/ktp/' . $transaksi->ktp) }}" width="500"
                                height="375" type="">
                        </div>
                        <div class="mb-3 row">
                            <embed src="{{ asset('image/sim/' . $transaksi->sim) }}" width="500"
                                height="375" type="">
                        </div>
                        </form>
                        {{-- click approved (status transaksi berubah dari pending -> success ) --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footerAdmin')
@endsection

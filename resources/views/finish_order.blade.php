@extends('layouts.main')

@section('container')
    <div class="container">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0"> Order Complete</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="/katalog">Preview</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="/checkout">Check Out</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="/payment">Payment </li>
                                <li class="breadcrumb-item"><a class="text-dark" href="/finishorder"> / Finished</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="card">
                <div class="card-body mx-4">
                    <div class="container">
                        <h3 class="my-5 mx-5" style="text-align: center">Thank for your Purchase</h3>
                        <ul class="list-unstyled">
                            <li class="text-black">Septi Intan</li>
                            <li class="text-muted mt-1"><span class="text-black">Invoice</span> {{ $trans['bookingcode'] }} </li>
                            <li class="text-black mt-1">{{ $time }}</li>
                        </ul>
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4">Pesanan Anda</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="small fw-bold">{{ $armada }} </strong><span class="text-muted small">Rp.
                                            {{ number_format($total, 0, ',', '.') }}</span> </li>
                                <span class="text-muted small">Rp.  {{ number_format($price, 0, ',', '.') }} x  {{ $durasi_sewa }}</span>
                                <li class="border-bottom my-2"></li>
                                
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="small fw-bold">Layanan Pengantaran</strong><span class="text-muted small">
                                        Rp. {{ number_format($biaya_antar, 0, ',', '.') }}</span></li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small fw-bold">Total</strong><strong>Rp.  {{ number_format($total + $biaya_antar, 0, ',', '.') }}</strong>
                                </li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small fw-bold" style="color: red">DP (50%)</strong><strong>Rp.
                                            {{ number_format($total / 2, 0, ',', '.') }}</strong></li>
                                <span class="text-muted small">*Total DP 50% dari Total Penyewaan Mobil </span>
                                {{-- <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small">Sisa Pembayaran</strong><span>Rp. 600.000</span></li> --}}
                            </ul>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('user-profile', ['id1' => $id_user, 'id2' => $id_trans]) }}"><u class="text">View in my profile</u></a>
                        </div>
                        <div class="text-center">
                            <a>Pertanyaan lebih lanjut hubungi admin</a> <a href="https://wa.me/085247768054">(Chat Now)</a>
                        </div>
                    </div>
                </div>
        </section>
@endsection

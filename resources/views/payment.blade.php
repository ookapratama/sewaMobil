@extends('layouts.main')

@section('container')
    <div class="container">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">Payment</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="/katalog">Preview</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="/checkout">Check Out</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Payment</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <!-- BILLING ADDRESS-->
            <h2 class="h5 text-uppercase mb-4">Selesaikan Pembayaran</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="container-payment" style="text-align: center">
                        <h1> 209280157937 </h1>
                        <div class="text-danger">
                            <h5> Bank Central Asia (BCA) </h5>
                        </div>
                        <h5> A/N SUBHAN TAUFIK </h5>
                    </div>
                    <form action="{{ route('payment.store') }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <fieldset>
                            {{-- <div class="form-group">
                    <label for="formFile">Nama Pemilik Rekening</label>
                    <input type="text" id="" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="form-group">Bank</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected> BCA (Bank Central Asia)</option>
                            <option value="1">BNI (Bank Negara Indonesia)</option>
                            <option value="2">Mandiri</option>
                            <option value="3">BRI (Bank Rakyat Indonesia)</option>
                            <option value="4">BTN/BTPN</option>
                            <option value="5">BCA (Bank Central Asia)</option>
                            <option value="6">CIMB Niaga</option>
                            <option value="7">Lain-Lain</option>
                        </select>
                    </div>
                </div> --}}
                            <input type="hidden" name="id_trans" value="{{ $id_trans }}">
                            <div class="form-group">
                                <label for="formFile">Upload Bukti Pembayaran</label>
                                <input class="form-control" type="file" name="dp_invoice" id="formFile" required>
                                <span class="text-muted small">Silahkan Transfer sesuai nominal DP (50%) </span>
                            </div>
                            <div class="form-group"></div>
                            <a href="{{ route('checkout', $armada->id) }}" class="btn btn-primary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Pesan</button>
                        </fieldset>
                    </form>
                </div>

                <!-- ORDER SUMMARY-->
                <div class="col-lg-6">
                    <div class="card border-0 rounded-0 p-lg-4 bg-light">
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4">Pesanan Anda</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="small fw-bold">{{ $armada->name }} </strong><span
                                        class="text-muted small">Rp.
                                        {{ number_format($total, 0, ',', '.') }}</span> </li>
                                <span class="text-muted small">Rp. {{ number_format($armada->price, 0, ',', '.') }} x
                                    {{ $trans }} </span>

                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="small fw-bold">Layanan Pengantaran</strong>
                                    <span class="text-muted small">
                                        Rp. {{ number_format($biaya_antar, 0, ',', '.') }}
                                    </span>
                                </li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small fw-bold">Total</strong><span>Rp. {{ number_format($total + $biaya_antar, 0, ',', '.') }}</span></li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small fw-bold" style="color: red">DP (50%)</strong><span>Rp.
                                            {{ number_format($total / 2, 0, ',', '.') }}</span></li>
                                <span class="text-muted small">*Total DP 50% dari Total Penyewaan Mobil </span>
                            </ul>
                                <a href="{{ route('payment.print') }} " class="btn btn-primary">print bukti</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    </section>
@endsection

@extends('layouts.main')

@section('container')
    <div class="container">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">Checkout</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="/katalog">Preview</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <!-- Rent Information-->
            <h2 class="h5 text-uppercase mb-4">Transaction Form</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Nama Lengkap </label>
                                <input class="form-control form-control-lg" type="text" id="firstName" placeholder="">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="email">Email </label>
                                <input class="form-control form-control-lg" type="email" id="email" placeholder="">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="phone">Nomor Telepon (WA) </label>
                                <input class="form-control form-control-lg" type="tel" id="phone" placeholder="">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="instagram">Akun Instagram </label>
                                <input class="form-control form-control-lg" type="text" id="sarfarazrentcar"
                                    placeholder="">
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="address">Alamat Lengkap </label>
                                <input class="form-control form-control-lg" type="text" id="address" placeholder="">
                            </div>
                            <div class="col-lg-6">
                                <label for="formFile" class="form-label">KTP</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-lg-6">
                                <label for="formFile" class="form-label">SIM</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-lg-6">
                                <label for="formFile" class="form-label">Start Date</label>
                                <input class="form-control form-control-lg" type="date" id="formFile">
                            </div>
                            <div class="col-lg-6">
                                <label for="formFile" class="form-label">End Date</label>
                                <input class="form-control form-control-lg" type="date" id="formFile">
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-info mb-2">Cek Ketersediaan Armada</button>
                                <div class="text-danger">
                                    {{-- <p>*armada tersedia</p> --}}
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="checkbox">
                                    <h6> Layanan Supir</h6>
                                </label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected> Lepas Kunci </option>
                                        <option value="1">Layanan Supir Dalam Kota Rp. 150.000 /12 Jam</option>
                                        <option value="2">Layanan Supir Luar Kota Rp. 200.000 /12 Jam
                                        </option>
                                    </select>
                                </div>
                                <div class="text-danger">*penambahan pelayanan supir diberikan secara langsung kepada owner
                                    di lokasi</div>
                            </div>

                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="checkbox">
                                    <h6> Layanan Pengantaran</h6>
                                </label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected> Ambil Sendiri (Self Pick-Up)</option>
                                        <option value="1">Balikpapan Utara (+ Rp. 20.000)</option>
                                        <option value="2">Balikpapan Timur (+ Rp. 30.000)</option>
                                        <option value="3">Balikpapan Selatan (+ Rp. 25.000)</option>
                                        <option value="4">Balikpapan Tengah (+ Rp. 30.000)</option>
                                        <option value="5">Balikpapan Barat (+ Rp. 30.000)</option>
                                        <option value="6">Bandara Sultan Aji Muhammad Sulaiman Sepinggan (Free)
                                        </option>
                                    </select>
                                </div>
                                <div class="text-danger">*biaya pengantaran diberikan secara langsung kepada supir</div>
                            </div>

                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="address">Alamat Pengantaran (*Jika
                                    Diantarkan)</label>
                                <input class="form-control form-control-lg" type="text" id="address"
                                    placeholder="">
                            </div>

                            <div class="col-lg mt-3">
                                <button class="btn btn-primary" href="/payment"> Pesan Sekarang </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    </section>
@endsection

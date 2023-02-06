@extends('layouts.main')

@section('container')

    <body>
        <main class="about-page">
            <div class="container">
                <h2 class="oleez-page-title wow fadeInUp">About Us</h2>
                <img src="/image/aboutus.jpg" alt="about" class="w-100 wow fadeInUp">
                <section class="oleez-about-features">
                    <div class="row">
                        <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                            <h5 class="feature-card-title">Pelayanan</h4>
                                <p class="feature-card-content">Rental mobil balikpapan terpercaya yang mengutamakan
                                    pelayanan yang cepat & tepat dengan harga terjangkau </p>
                        </div>
                        <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                            <h5 class="feature-card-title">Keamanan</h4>
                                <p class="feature-card-content">Setiap armada memiliki kondisi mesin yang terawat sehingga
                                    aman dan nyaman digunakan</p>
                        </div>
                        <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                            <h5 class="feature-card-title">Kebersihan</h4>
                                <p class="feature-card-content">Seluruh armada dijaga kebersihannya sebelum diberikan kepada
                                    anda sehingga sangat nyaman digunakan</p>
                        </div>
                    </div>
                </section>

                <main class="blog-post-single">
                    <div class="container">
                        <h4 class="oleez-page-title wow fadeInUp">Syarat dan Ketentuan</h4>
                        <div class="row">
                            <div class="col-md-8 blog-post-wrapper">
                                <div class="post-content wow fadeInUp">
                                    <blockquote class="feature-card-content wow fadeInUp">
                                        <ul>
                                            <li>Jaminan Identitas Asli (KTP, SIM, ID CARD)</li>
                                            <li>Memiliki SIM Yang Masih Berlaku</li>
                                            <li>Jaminan Kendaraan Bermotor atau Deposit Uang</li>
                                            <li>Bersedia Foto Untuk Dokumentasi</li>
                                            <li>Pembayaran Di Depan Saat Serah Terima Kendaraan</li>
                                        </ul>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </main>
    </body>

@endsection

@extends('layouts.main')

@section('container')
    <section class="oleez-landing-section oleez-landing-section-news">
        <div class="container">
            <section class="oleez-about-work-with-us wow fadeInUp">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2 class="section-title">Bagikan pengalaman anda menggunakan jasa kami</h2>
                        <p class="section-subtitle"><a href="#!"> kritik </a> dan <a href="#!"> saran </a> sangat
                            kami terima dalam upaya meningkatkan kualitas pelayanan yang kami miliki.</p>
                        <a href="/add-testimoni" class="btn work-with-us-btn">Tulis Ulasan</a>
                    </div>
                </div>
            </section>
            <div class="row">
                @foreach ($testimonis as $data)
                    <div class="col-lg-4 mb-4 mb-lg-4">
                        <div class="news-card news-card-testi wow fadeInUp">
                            <div class="card-body">
                                <div class="author-info media">
                                    <img src={{ $data ->picture ?? '/image/logo.png' }} alt="author"class="author-avatar">
                                    <div class="media-body">
                                        <h6 class="author-name">Posted by Client {{ $data-> user_id }}</h6>
                                        <p class="news-post-date">{{ $data -> created_at }}</p>
                                    </div>
                                </div>
                                <div class="post-meta">
                                </div>
                                <h5 class="post-title"> {{ $data['text'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
@endsection

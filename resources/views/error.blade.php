@extends('layouts.main')

@section('container')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h2>The page you are looking for doesn't exist.</h2>
                <a class="btn" href="/"> Back to home</a> <img src="/image/error.jpg" class="img-fluid py-5"
                    alt="Page Not Found">
            </section>
        </div>
    </main>
@endsection

@extends('layouts.main')

@section('container')
    <div class="loader"></div>
    <main class="shop-page">
        <div class="container">
            <div class="page-header wow fadeInUp">
                {{-- <h4 class="section-title">Sewa Armada bertanda 'Available'</h4> --}}
            </div>
            <div class="row">
                @foreach ($armadas as $data)
                    <div class="col-md-3 product-card wow fadeInUp">
                        <div class="product-thumbnail-wrapper">
                            <img src="{{ $data -> picture_url ?? '/image/rentcar.jpg' }}" alt="product" class="product-thumbnail">
                        </div>
                        <h5 class="product-title"> {{ strtoupper($data -> name) }} </h5>
                        <p class="product-desc"> {{ strtoupper($data -> transmission)}} - {{strtoupper($data -> status) }} </p>
                        <p class="product-price"> Rp. {{ number_format($data -> price, 0,",","." )}} </p>
                        <div class="btn-wrapper"> <button class="btn btn-add-to-cart"> Pesan</button></div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

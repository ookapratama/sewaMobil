@extends('layouts.main')

@section('container')
    <div class="container">

        <section>
            <div class="container padding-bottom-3x mb-2">
                <div class="row">
                    <div class="col-lg-4">
                        <aside class="user-info-wrapper">
                            <div class="user-cover" style="">
                            </div>
                            <div class="user-info">
                                <div class="user-avatar">
                                    <a class="edit-avatar" href="#"></a><img
                                        src="/image/classic-portrait-silhouette-man.jpg" alt="User">
                                </div>
                                <div class="user-data">
                                    <h4> Nama Pelanggan </h4>
                                </div>
                            </div>
                        </aside>
                        @include('nav-profile')

                    </div>
                    <div class="col-lg-8">
                        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                        <!-- Transaction Table-->
                        <div class="table-responsive wishlist-table margin-bottom-none">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h4>Transaksi</h4>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="product-item">
                                                <div class="product-info">
                                                    <h3 class="invoice-id"><a href="#"> <strong> {{ $trans->bookingcode }} </strong> </a>
                                                    </h3>
                                                    <div class="text-lg text-bold"> {{$trans->armada->name}} </div>
                                                    <div class="text-lg text-medium text-muted">Rp. {{ number_format($trans->total, 0, ',', '.') }} </div>
                                                    <div>Status:
                                                        <div class="d-inline text-{{ $trans->status == 'success' ? 'success' : 'warning'}}"> {{ $trans->status }} </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center"><a class="remove-from-cart" href="#"
                                                data-toggle="tooltip" title="" data-original-title="Remove item"><i
                                                    class="icon-cross"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
@endsection

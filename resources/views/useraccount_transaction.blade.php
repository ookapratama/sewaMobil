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
                        <nav class="list-group">
                            <a class="list-group-item with-badge" href="/user-profile"><i class=" fa fa-th"></i>Profile</a>
                            <a class="list-group-item active" href="/user-transaction"><i
                                    class="fa fa-user"></i>Transaksi</a>
                            <a class="list-group-item" href="/user-invoice"><i class="fa fa-map"></i>Invoice</a>
                            <a class="list-group-item" href="/"><i class=""></i>Logout</a>

                        </nav>
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
                                                    <h3 class="invoice-id"><a href="#"> <strong> #12345 </strong> </a>
                                                    </h3>
                                                    <div class="text-lg text-bold"> Rush TRD</div>
                                                    <div class="text-lg text-medium text-muted">Rp. 1.200.000</div>
                                                    <div>Status:
                                                        <div class="d-inline text-success">Complete</div>
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

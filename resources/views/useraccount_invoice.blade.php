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
                                    <h4> Akun Anda </h4>
                                </div>
                            </div>
                        </aside>
                        @include('nav-profile')

                    </div>
                    <div class="col-lg-8 border">
                        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                        <!-- Invoice -->
                        <body>
                            <img src="/image/logo.png" alt="logo" height="50">
                            <table class="table mt-2">
                                <tbody>
                                    <tr>
                                        <td class="border-0 pl-0" width="70%">
                                            <h4 class="text-uppercase">
                                                <strong> Sarfaraz Rent Car</strong>
                                            </h4>
                                        </td>
                                        <td class="border-0 pl-0">
                                            <h4 class="text-uppercase cool-gray"> Invoice Status</h4>
                                            <p> Invoice ID : {{ $trans->bookingcode }} </p>
                                            <p>
                                                {{ $trans->created_at }}
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Seller - Buyer --}}
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 pl-0 party-header" width="48.5%">
                                        </th>
                                        <th class="border-0" width="3%"></th>
                                        <th class="border-0 pl-0 party-header">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-0">
                                            <p class="seller-name">
                                                <Strong> Dari</Strong>
                                            </p>
                                            <p> Sarfaraz Rent Car</p>
                                            <p class="seller-address"> Perumahan Puri Mandastana Blok Q No.3</p>
                                            <p> 08123456789 </p>
                                        </td>
                                        <td class="border-0"></td>
                                        <td class="px-0">
                                            <p> <strong> Kepada</strong></p>
                                            <p> {{ $trans->fullname }} </p>
                                            <p> {{ $trans->alamat }} </p>
                                            <p> {{ $trans->no_telp }} </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Table --}}
                            <table class="table table-items">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 pl-0">Invoice Desc</th>
                                        <th scope="col" class="text-center border-0"> Durasi </th>
                                        <th scope="col" class="text-center border-0"> Harga </th>
                                        <th scope="col" class="text-right border-0"> Sub Total </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pl-0"> {{ $trans->armada->name }}
                                        </td>
                                        <td class="text-center">
                                            {{ $trans->durasi_sewa }} Hari
                                        </td>
                                        <td class="text-center">
                                            Rp. {{ number_format($trans->armada->price , 0, ',', '.') }}
                                        </td>
                                        <td class="text-right">
                                            Rp. {{ number_format($trans->total, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pl-0"> Total Pembayaran</td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right"> <strong> Rp. {{ number_format($trans->total, 0, ',', '.') }} </strong></td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p> *Pembayaran Max Hari Pengambilan Armada</p>
                        </body>
                        </html>
                    </div>
                </div>
            </div>
        </section>
@endsection

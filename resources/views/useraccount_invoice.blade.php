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
                                    <h4> Selamat Datang! </h4>
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
                                            {{-- @if ($invoice->status)
                                                <h4 class="text-uppercase cool-gray">
                                                    <strong>{{ $invoice->status }}</strong>
                                                </h4>
                                            @endif --}}
                                            <p> Invoice ID : {{ $trans['bookingcode'] }} </p>{{-- <p>{{ __('invoices::invoice.serial') }} <strong>{{ $invoice->getSerialNumber() }}</strong></p> --}}
                                            <p>
                                                {{ $trans['created_at'] }}
                                            </p>{{-- <p>{{ __('invoices::invoice.date') }}: <strong>{{ $invoice->getDate() }}</strong></p> --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Seller - Buyer --}}
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 pl-0 party-header" width="48.5%">
                                            {{-- {{ __('invoices::invoice.seller') }} --}}
                                        </th>
                                        <th class="border-0" width="3%"></th>
                                        <th class="border-0 pl-0 party-header">
                                            {{-- {{ __('invoices::invoice.buyer') }} --}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-0">
                                            {{-- @if ($invoice->seller->name) --}}
                                            <p class="seller-name">
                                                <Strong> Dari</Strong>{{-- <strong>{{ $invoice->seller->name }}</strong> --}}
                                            </p>
                                            <p> Sarfaraz Rent Car</p>
                                            {{-- @endif --}}

                                            {{-- @if ($invoice->seller->address) --}}
                                            <p class="seller-address">
                                                Perumahan Puri Mandastana Blok Q No.3{{-- {{ __('invoices::invoice.address') }}: {{ $invoice->seller->address }} --}}
                                            </p>
                                            {{-- @endif --}}

                                            {{-- @if ($invoice->seller->code)
                                                <p class="seller-code">
                                                    {{ __('invoices::invoice.code') }}: {{ $invoice->seller->code }}
                                                </p>
                                            @endif --}}
                                            {{--
                                            @if ($invoice->seller->vat)
                                                <p class="seller-vat">
                                                    {{ __('invoices::invoice.vat') }}: {{ $invoice->seller->vat }}
                                                </p>
                                            @endif --}}

                                            {{-- @if ($invoice->seller->phone)
                                                <p class="seller-phone">
                                                    {{ __('invoices::invoice.phone') }}: {{ $invoice->seller->phone }}
                                                </p>
                                            @endif --}}
                                            <p> 08123456789 </p>

                                            {{-- @foreach ($invoice->seller->custom_fields as $key => $value)
                                                <p class="seller-custom-field">
                                                    {{ ucfirst($key) }}: {{ $value }}
                                                </p>
                                            @endforeach --}}
                                        </td>
                                        <td class="border-0"></td>
                                        <td class="px-0">
                                            {{-- @if ($invoice->buyer->name)
                                                <p class="buyer-name">
                                                    <strong>{{ $invoice->buyer->name }}</strong>
                                                </p>
                                            @endif --}}
                                            <p> <strong> Kepada</strong></p>
                                            <p> {{ $trans->fullname }} </p>

                                            {{-- @if ($invoice->buyer->address)
                                                <p class="buyer-address">
                                                    {{ __('invoices::invoice.address') }}: {{ $invoice->buyer->address }}
                                                </p>
                                            @endif --}}
                                            <p> {{ $trans->alamat }} </p>


                                            {{-- @if ($invoice->buyer->phone)
                                                <p class="buyer-phone">
                                                    {{ __('invoices::invoice.phone') }}: {{ $invoice->buyer->phone }}
                                                </p>
                                            @endif --}}
                                            <p> {{ $trans->no_telp }} </p>

                                            {{--
                                            @foreach ($invoice->buyer->custom_fields as $key => $value)
                                                <p class="buyer-custom-field">
                                                    {{ ucfirst($key) }}: {{ $value }}
                                                </p>
                                            @endforeach --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Table --}}
                            <table class="table table-items">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col" class="border-0 pl-0">{{ __('invoices::invoice.description') }}</th> --}}
                                        <th scope="col" class="border-0 pl-0">Invoice Desc</th>

                                        {{-- @if ($invoice->hasItemUnits)
                                            <th scope="col" class="text-center border-0">{{ __('invoices::invoice.units') }}</th>
                                        @endif --}}
                                        {{-- <th scope="col" class="text-center border-0">{{ __('invoices::invoice.quantity') }}</th> --}}
                                        <th scope="col" class="text-center border-0"> Durasi </th>
                                        <th scope="col" class="text-center border-0"> Harga </th>
                                        <th scope="col" class="text-right border-0"> Sub Total </th>
                                        {{-- <th scope="col" class="text-right border-0">{{ __('invoices::invoice.price') }}</th> --}}
                                        {{-- <th scope="col" class="text-right border-0 pr-0">{{ __('invoices::invoice.sub_total') }}</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Items --}}
                                    {{-- @foreach ($invoice->items as $item) --}}
                                    <tr>
                                        <td class="pl-0"> {{ $trans->armada->name }}
                                            {{-- {{ $item->title }} --}}
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
                                    {{-- @endforeach --}}
                                    <tr>
                                        <td class="pl-0"> Total Pembayaran</td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right"> <strong> Rp. {{ number_format($trans->total, 0, ',', '.') }} </strong></td>
                                        {{-- {{ $invoice->formatCurrency($invoice->total_amount) }} --}}
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

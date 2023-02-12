@extends('layouts.main', ['title' => 'User Profile'])

@section('container')
    <div class="container">
        {{-- {{ dd($user) }} --}}
        <section>
            <div class="container padding-bottom-3x mb-2">
                <div class="row">
                    <div class="col-lg-4">
                        <aside class="user-info-wrapper">
                            <div class="user-cover" style=""></div>
                            <div class="user-info">
                                <div class="user-avatar">
                                    <a class="edit-avatar" href="#"></a><img
                                        src="/image/classic-portrait-silhouette-man.jpg" alt="User">
                                </div>
                                <div class="user-data">
                                    <h4> Akun anda </h4>
                                </div>
                            </div>
                        </aside>
                        {{-- {{ dd($id_trans) }} --}}
                        @include('nav-profile')
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body pt-3">
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                    <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Profile</button></li>
                                </ul>
                                <div class="tab-content pt-2">
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Email</h5>
                                        <p class="label ">{{ $user->email }} </p>
                                        <h5 class="card-title">Nomor </h5>
                                        <p class="label ">{{ $user->trans->no_telp }} </p>
                                        <h5 class="card-title">Alamat</h5>
                                        <p class="label "> {{ $user->trans->alamat }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

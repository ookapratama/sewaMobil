@extends('layouts.main')

@section('container')

    <body>
        <div class="loader">
            <main class="d-flex align-items-center mt-5 mb-5">
                <div class="container">
                    <div class="card login-card">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <img src="/image/loginpict.jpg" alt="login" class="login-card-img">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p class="login-card-description">Sign In</p>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $v)
                                            <li class="list-group-item list-group-item-danger">{{ $v }}</li>
                                        @endforeach
                                    @endif
                                    <form action="{{ route('login.cek') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email" class="sr-only">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email address">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="password" class="sr-only">Password</label>
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Enter Password">
                                        </div>
                                        <button id="login" class="btn btn-block login-btn mb-4"
                                        type="submit">Login</button>
                                    </form>
                                    <p class="login-card-footer-text">Don't have an account? <a href="/signup"
                                            class="text-reset">Register here</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>


    {{-- @include('partials.footer') --}}
@endsection

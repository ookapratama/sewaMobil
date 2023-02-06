@extends('layouts.main')

@section('container')

    <body>
        <div class="loader"></div>
        <main class="d-flex align-items-center min-vh-75 mt-5 mb-5">
            <div class="container">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="/image/loginpict.jpg" alt="login" class="login-card-img">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="login-card-description">Sign Up</p>
                                <form action="#!">
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email address">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" class="sr-only">Full Name</label>
                                        <input type="text" name="fullname" id="password" class="form-control"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" class="sr-only">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Enter Password">
                                    </div>
                                    <input name="signup" id="login" class="btn btn-block login-btn mb-4" type="button"
                                        value="Sign Up">
                                </form>
                                <a href="#!" class="forgot-password-link">Forgot password?</a>
                                <p class="login-card-footer-text">Already have an account? <a href="/login"
                                        class="text-reset">Login here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
    {{-- @include('partials.footer') --}}
@endsection

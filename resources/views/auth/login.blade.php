{{-- Extends layout auth --}}
@extends('auth.layouts.app')

{{-- Google Tag Manager --}}

{{-- Content Login --}}
@section('content')
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <a href="javascript:void(0); class="logo">
                            <img src="assets/images/logo-dark.png" alt="" height="22" class="logo-dark mx-auto">
                        </a>
                        <p class="text-muted mt-2 mb-4">{{ env('APP_NAME') }} VVIP Cheat</p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">
                            
                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0"> Masuk </h4>
                            </div>

                            <form action="{{ route('login') }}" method="POST">

                                {{-- CSRF --}}
                                {{ csrf_field() }}

                                <div class="form-group mb-3">
                                    <label for="emailaddress"> Username </label>
                                    <input class="form-control" type="email" name="username" id="emailaddress" placeholder="Nama pengguna" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password"> Kata sandi </label>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Kata sandi" required>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Masuk </button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Tidak punya akun? <a href="{{ route('register') }}" class="text-dark ml-1"><b> Daftar Gratiss! </b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
@endsection

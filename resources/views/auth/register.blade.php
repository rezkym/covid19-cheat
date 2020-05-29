{{-- Extends layout auth --}}
@extends('auth.layouts.app')

{{-- Title Page --}}
@section('title', 'Daftar')

{{-- Google Tag Manager --}}

{{-- Content Login --}}
@section('content')
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <a href="javascript:void(0)"; class="logo">
                            <img src="assets/images/logo-dark.png" alt="" height="22" class="logo-dark mx-auto">
                        </a>
                    <p class="text-muted mt-2 mb-4"></p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">
                            
                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0"> Daftar </h4>
                            </div>

                            @if($errors->any())
                                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                            @endif

                            <form action="{{ route('register') }}" method="POST">

                                {{-- CSRF --}}
                                {{ csrf_field() }}

                                {{-- Name field --}}
                                <div class="form-group mb-3">
                                    <label for="name"> Nama </label>
                                    <input class="form-control  @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nama " required>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                {{-- Username Field --}}
                                <div class="form-group mb-3">
                                    <label for="username"> Username </label>
                                    <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Nama pengguna" required>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- Email Field --}}
                                <div class="form-group mb-3">
                                    <label for="email"> Email </label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- Password Field --}}
                                <div class="form-group mb-3">
                                    <label for="password"> Kata sandi </label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Kata sandi" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Daftar </button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Sudah punya akun? <a href="{{ route('login') }}" class="text-dark ml-1"><b> Masuk sekarang! </b></a></p>
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

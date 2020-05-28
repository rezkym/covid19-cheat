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
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo-light.png" alt="" height="22" class="logo-light mx-auto">
                        <img src="assets/images/logo-dark.png" alt="" height="22" class="logo-dark mx-auto">
                        </a>
                        <p class="text-muted mt-2 mb-4">Pendaftaran Berhasil</p>
                    </div>
                                            <div class="card text-center">

                        <div class="card-body p-4">
                            
                            <div class="mb-4">
                                <h4 class="text-uppercase mt-0">Pendaftaran Berhasil</h4>
                            </div>
                            <img src="assets/images/logo-sm.png" alt="img" width="86" class="mx-auto d-block" />

                            <p class="text-muted font-14 mt-2"> 
                                Terimakasih telah mendaftar kami akan memberitahu kamu apabila
                                website sudah dapat di gunakan. <br/>
                            </p>

                            <a href="http://localhost:99/login" class="btn btn-block btn-pink waves-effect waves-light mt-3"> Kembali </a>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
@endsection

@extends('layouts.app')

{{-- Title header --}}
@section('title-header', 'Beranda')

{{-- Title Page --}}
@section('title-content')

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title">Beranda</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active"><a href="javascript: void(0);">Beranda</a></li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
{{-- Content Page --}}
@section('content')

                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"> Lapor kesalahan </a>
                                    </div>
                                </div>

                                <h4 class="header-title mt-0 mb-4"> Pendapatan </h4>

                                <div class="widget-chart-1">
                                    <div class="widget-chart-box-1 float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                            data-bgColor="#F9B9B9" value="58"
                                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                                            data-thickness=".15"/>
                                    </div>

                                    <div class="widget-detail-1 text-right">
                                        <h2 class="font-weight-normal pt-2 mb-1"> Rp2jt </h2>
                                        <p class="text-muted mb-1"> Keseluruhan </p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"> Lapor kesalahan </a>
                                    </div>
                                </div>

                                <h4 class="header-title mt-0 mb-3"> Pendapatan </h4>

                                <div class="widget-box-2">
                                    <div class="widget-detail-2 text-right">
                                        <span class="badge badge-success badge-pill float-left mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="font-weight-normal mb-1"> Rp 321.000 </h2>
                                        <p class="text-muted mb-3"> Hari ini </p>
                                    </div>
                                    <div class="progress progress-bar-alt-success progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar"
                                                aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Lapor kesalahan</a>
                                    </div>
                                </div>

                                <h4 class="header-title mt-0 mb-4"> Penjualan Reseller </h4>

                                <div class="widget-chart-1">
                                    <div class="widget-chart-box-1 float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                                data-bgColor="#FFE6BA" value="80"
                                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                data-thickness=".15"/>
                                    </div>
                                    <div class="widget-detail-1 text-right">
                                        <h2 class="font-weight-normal pt-2 mb-1"> 4569 </h2>
                                        <p class="text-muted mb-1">Revenue today</p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Lapor kesalahan</a>
                                    </div>
                                </div>

                                <h4 class="header-title mt-0 mb-3">Penjualan Agen </h4>

                                <div class="widget-box-2">
                                    <div class="widget-detail-2 text-right">
                                        <span class="badge badge-pink badge-pill float-left mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="font-weight-normal mb-1"> 158 </h2>
                                        <p class="text-muted mb-3">Revenue today</p>
                                    </div>
                                    <div class="progress progress-bar-alt-pink progress-sm">
                                        <div class="progress-bar bg-pink" role="progressbar"
                                                aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div><!-- end col -->

                    </div>
                    <!-- end row -->  

@endsection

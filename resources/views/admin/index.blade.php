@extends('admin.layouts.master')
@section('title')
    <title>Dashboard - Koraka Marketplace</title>
@endsection
@section('content')
    <div class="page-content" style="min-height: 1434px;">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->

        <!-- END THEME PANEL -->
        <h1 class="page-title"> Dashboard
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>

        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-green-sharp">
                                <span data-counter="counterup" data-value="{{ $n_format }}">{{ $n_format }}</span>
                                <small class="font-green-sharp">{{ $prefix }}</small>
                            </h3>
                            <small>Nilai Transaksi</small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-red-haze">
                                <span data-counter="counterup"
                                      data-value="{{ $product_count }}">{{ $product_count }}</span>
                            </h3>
                            <small>Total Product</small>
                        </div>
                        <div class="icon">
                            <i class="icon-tag"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">
                                <span data-counter="counterup"
                                      data-value="{{ $transaksi_count }}">{{ $transaksi_count }}</span>
                            </h3>
                            <small>TOTAL Transaksi</small>
                        </div>
                        <div class="icon">
                            <i class="icon-basket"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-purple-soft">
                                <span data-counter="counterup" data-value="{{ $user_count }}">{{ $user_count }}</span>
                            </h3>
                            <small>REGISTERED USERS</small>
                        </div>
                        <div class="icon">
                            <i class="icon-user"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('plugins_js')
    <script src="{{ asset('admin-assets/plugins/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/plugins/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
    <script>

    </script>
@endsection
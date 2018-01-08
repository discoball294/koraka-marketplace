@extends('store-front.layouts.master')

@section('page-title')
    <title>About - Koraka</title>
@endsection
@section('title-section')
    <section class="page-title page-title-4 image-bg overlay parallax">
        <div class="background-image-holder fadeIn">
            <img alt="Background Image" class="background-image" src="{{ asset('img/cover-about.jpeg') }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="uppercase mb8">About Us</h2>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
@section('content')
    <section class="pt180 pb180 pt-xs-80 pb-xs-80">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h3 class="mb40 mb-xs-32">An marketplace founded on the principles of Honesty, Clarity,
                        Simplicity.</h3>
                    <p class="lead mb0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo.
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="pt0 pb0 pb-xs-80 image-zoom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-xs-40">
                    <img class="p32" alt="Pic" src="{{ asset('img/mockup-koraka.jpg') }}">
                </div>
                <div class="col-md-5 col-md-push-1 col-sm-6 mt104 mt-sm-80 mt-xs-0 text-center-xs">
                    <h5 class="uppercase">
                        Jual Barang, Beli Barang.
                    </h5>
                    <h4 class="mb160 mb-xs-80">Kami menyediakan semua kebutuhan fashionmu disini</h4>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="pt0 pb0 pt-xs-80 bg-secondary image-zoom">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 mt104 mt-sm-80 mt-xs-0 text-center-xs mb-xs-40">
                    <h5 class="uppercase">
                        <strong>Kemudahan yang kami tawarkan.</strong>
                    </h5>
                    <h4 class="mb160 mb-xs-80">Jangkau setiap penyedia barang melalui Gagdetmu.</h4>
                </div>
                <div class="col-md-4 col-md-push-2 col-sm-6">
                    <img alt="Pic" src="{{ asset('img/koraka-laptop.jpg') }}">
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection

@extends('store-front.layouts.master')

@section('page-title')
    <title>Error 403 Unauthorized - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section class="fullscreen">
        <div class="container v-align-transform">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="text-center">
                        <i class="ti-alert icon icon-lg mb24 mb-xs-0"></i>
                        <h1 class="large">Unauthorized</h1>
                        <p>{{ $exception->getMessage() }}</p>
                        <a class="btn" href="{{ route('storefront.index') }}">Go Back Home</a>
                    </div>
                </div>
            </div>
            <!--end of row-->
            <div class="embelish-icons">
                <i class="ti-help-alt"></i>
                <i class="ti-cross"></i>
                <i class="ti-support"></i>
                <i class="ti-announcement"></i>
                <i class="ti-signal"></i>
                <i class="ti-pulse"></i>
                <i class="ti-marker"></i>
                <i class="ti-pulse"></i>
                <i class="ti-alert"></i>
                <i class="ti-help-alt"></i>
                <i class="ti-alert"></i>
                <i class="ti-pulse"></i>
            </div>
        </div>
        <!--end of container-->
    </section>
@endsection
@section('additional-script')
    <script src="{{ asset('js/fileinput.js') }}"></script>
    <script>
        $(document).on('ready', function () {
            $("#input-b5").fileinput({
                showCaption: false,
                showUpload: false
            });
        });
    </script>
@endsection

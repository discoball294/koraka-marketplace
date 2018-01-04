@extends('store-front.layouts.master')

@section('page-title')
    <title>Login - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section class="cover fullscreen image-bg overlay">
        <div class="background-image-holder fadeIn">
            <img alt="image" class="background-image" src="{{ asset('img/login-cover.jpg') }}">
        </div>
        <div class="container v-align-transform">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="feature bordered text-center">
                        <h4 class="uppercase">Register Here</h4>
                        <form class="text-left" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <input id="name" type="text" name="name" placeholder="Nama"
                                   value="{{ old('name') }}" required autofocus>
                            <input id="email" type="email" name="email" placeholder="Email Address"
                                   value="{{ old('email') }}" required>
                            <input id="password" type="password" placeholder="Password" name="password" required>
                            <input id="password-confirm" type="password" class="form-control"
                                   placeholder="Confirm Password"
                                   name="password_confirmation" required>
                            <input type="submit" value="Register">
                        </form>
                        <p class="mb0">By signing up, you agree to our
                            <a href="#">Terms Of Use</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--end of row-->
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

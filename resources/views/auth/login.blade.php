@extends('store-front.layouts.master')

@section('page-title')
    <title>Login - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section class="cover fullscreen image-bg overlay">
        <div class="background-image-holder fadeIn">
            <img alt="image" class="background-image" src="{{ asset('img/login-cover.jpg') }}" style="display: none;">
        </div>
        <div class="container v-align-transform">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                    <div class="feature bordered text-center">
                        <h4 class="uppercase">Login Here</h4>
                        <form class="text-left" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <input id="email" type="text" placeholder="Email" class="mb0" name="email"
                                   value="{{ old('email') }}" required autofocus>
                            <input class="mb10" type="password" name="password" placeholder="Password">
                            <span>Remember Me</span>
                            <div class="checkbox-option pull-right">
                                <div class="inner"></div>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <input type="submit" value="Login">
                        </form>
                        <p class="mb0">Forgot your password?
                            <a href="#">Click Here To Reset</a>
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

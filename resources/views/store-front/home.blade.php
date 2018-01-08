<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Koraka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/ytplayer.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/theme-gunmetal.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
          rel='stylesheet' type='text/css'>
</head>
<body class="scroll-assist">
<div class="nav-container">
    <a id="top"></a>
    <nav class="nav-centered">
        <div class="text-center">
            <a href="index.html">
                <img class="logo logo-light" alt="Foundry" src="{{ asset('img/logo-light.png') }}"/>
                <img class="logo logo-dark" alt="Foundry" src="{{ asset('img/logo-dark.png') }}"/>
            </a>
        </div>
        <div class="nav-bar text-center">
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group text-left">
                <div class="module left">
                    <ul class="menu">
                        <li>
                            <a href="{{ route('storefront.index') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('storefront.product','all') }}">
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('storefront.contact') }}">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('storefront.about') }}">
                                About Us
                            </a>
                        </li>
                    </ul>
                </div>
                <!--end of menu module-->
                <div class="module widget-handle search-widget-handle left">
                    <div class="search">
                        <i class="ti-search"></i>
                        <span class="title">Search Site</span>
                    </div>
                    <div class="function">
                        <form class="search-form" method="get" action="{{ route('storefront.search') }}">
                            <input type="text" placeholder="Type Here" name="q"/>
                        </form>
                    </div>
                </div>
                <div class="module widget-handle cart-widget-handle left">
                    <div class="cart">
                        <i class="ti-bag"></i>
                        <span class="label number">{{ $cart_count }}</span>
                        <span class="title">Shopping Cart</span>
                    </div>
                    <div class="function">
                        <div class="widget">
                            <h6 class="title">Shopping Cart</h6>
                            <hr>
                            <ul class="cart-overview">
                                @foreach($cart_content as $cart)
                                    @foreach($cart as $content)
                                        <li>
                                            <a href="{{ route('storefront.product-single',$content->id) }}">
                                                <img alt="Product" src="{{ asset($content->options->image) }}"/>
                                                <div class="description">
                                                    <span class="product-title">{{ $content->name }}</span>
                                                    <span class="price number">Rp. {{ number_format($content->price) }}</span>
                                                </div>
                                            </a>
                                        </li>
                                        @if($loop->iteration == 1)
                                            @break
                                        @endif
                                    @endforeach
                                    @if($loop->iteration == 2)
                                        @break
                                    @endif
                                @endforeach
                            </ul>
                            <hr>
                            <div class="cart-controls">
                                <a class="btn btn-sm btn-filled" href="{{ route('cart-content') }}">Show All</a>
                                <div class="list-inline pull-right">
                                    <span class="cart-total">Total: </span>
                                    <span class="number">Rp. {{ $cart_total }}</span>
                                </div>
                            </div>
                        </div>
                        <!--end of widget-->
                    </div>
                </div>
                <div class="module widget-handle language left">
                    @include('store-front.layouts.include.user-menu')
                </div>
            </div>
            <!--end of module group-->
        </div>
    </nav>
</div>
<div class="main-container">
    <section class="image-slider slider-all-controls parallax controls-inside pt0 pb0">
        <ul class="slides">
            <li class="overlay image-bg pt240 pb240 pt-xs-120 pb-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/fashion1.jpg">
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="mb40 uppercase">Bold, Vibrant, You.</h2>
                            <a class="btn btn-lg" href="#">Explore Collection</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </li>
        </ul>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h6 class="uppercase mb0">Free shipping on all orders over £50 for the month of October</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="image-tile inner-title title-center text-center">
                        <a href="#">
                            <img alt="Pic" src="img/fashion2.jpg"/>
                            <div class="title">
                                <h4 class="uppercase mb0">Fall Lookbook</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image-tile inner-title title-center text-center">
                        <img alt="Pic" src="img/fashion3.jpg"/>
                        <div class="title">
                            <div class="modal-container">
                                <div class="play-button btn-modal inline"></div>
                                <div class="foundry_modal no-bg">
                                    <iframe data-provider="vimeo" data-video-id="63344039" data-autoplay="1"
                                            allowfullscreen="allowfullscreen"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h6 class="uppercase mb0">Most Pupular Products</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                @foreach($sorted_product as $item)
                    <div class="col-md-3 col-sm-4">
                        <div class="image-tile outer-title text-center">
                            <a href="{{ route('storefront.product-single',$item->slug) }}">
                                <img alt="Pic" class="product-thumb" src="{{ asset($item->gambar) }}"/>
                            </a>
                            <div class="title">
                                <a href="{{ route('storefront.product-single',$item->id) }}"><h5
                                            class="mb0">{{ $item->nama_barang }}</h5></a>
                                <span class="display-block mb16">Rp. {{ number_format($item->harga) }}</span>
                            </div>
                        </div>
                    </div>
                    <!--end three col-->
                @if($loop->iteration == 4)
                    @break
                @endif
            @endforeach
            <!--end three col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="image-tile inner-title title-center text-center">
                        <a href="#">
                            <img alt="Pic" src="img/fashion4.jpg"/>
                            <div class="title">
                                <h4 class="uppercase mb0">Sustainability</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image-tile inner-title title-center text-center">
                        <a href="#">
                            <img alt="Pic"
                                 src="https://images.unsplash.com/photo-1439789246184-86fd68529829?q=80&fm=jpg&s=9b5281bedc9e4ce2e40216c99715f5e5"/>
                            <div class="title">
                                <h4 class="uppercase mb0">#foundrylife</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="col-sm-3 p0">
                        <a href="#">
                            <div class="bg-secondary pt96 pb96 text-center fade-on-hover">
                                <i class="ti-shopping-cart-full icon icon-sm mb8"></i>
                                <h6 class="uppercase mb0">Shop Range</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p0">
                        <a href="#">
                            <div class="bg-secondary pt96 pb96 text-center fade-on-hover">
                                <i class="ti-package icon icon-sm mb8"></i>
                                <h6 class="uppercase mb0">Shipping Info</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p0">
                        <a href="#">
                            <div class="bg-secondary pt96 pb96 text-center fade-on-hover">
                                <i class="ti-help-alt icon icon-sm mb8"></i>
                                <h6 class="uppercase mb0">FAQ</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p0">
                        <a href="#">
                            <div class="bg-secondary pt96 pb96 text-center fade-on-hover">
                                <i class="ti-receipt icon icon-sm mb8"></i>
                                <h6 class="uppercase mb0">Returns Policy</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-1 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img alt="Logo" class="logo" src="{{ asset('img/logo-light.png') }}"/>
                </div>
                <div class="col-md-3 col-sm-6">

                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">

                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">

                    <!--end of widget-->
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-6">
                    <span class="sub">&copy; Copyright 2016 - Medium Rare</span>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline social-list">
                        <li>
                            <a href="#">
                                <i class="ti-twitter-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-vimeo-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of container-->
        <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
    </footer>
</div>
<div class="foundry_modal text-center fullscreen image-bg" data-time-delay="5000" data-cookie="dismissed-fashion-modal">
    <div class="background-image-holder">
        <img alt="Background" class="background-image" src="img/fashion5.jpg"/>
    </div>
    <h2 class="uppercase pt96 pt-xs-0">Spring
        <br/>Clearance Sale</h2>
    <p class="lead mb48">
        Pick up all the hottest looks from our spring collection in our
        <br/> Spring Clearance Runout. Hurry, they won't last!
    </p>
    <a class="btn btn-lg" href="#">Shop The Sale</a>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/flickr.js') }}"></script>
<script src="{{ asset('js/flexslider.min.js') }}"></script>
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/masonry.min.js') }}"></script>
<script src="{{ asset('js/twitterfetcher.min.js') }}"></script>
<script src="{{ asset('js/spectragram.min.js') }}"></script>
<script src="{{ asset('js/ytplayer.min.js') }}"></script>
<script src="{{ asset('js/countdown.min.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
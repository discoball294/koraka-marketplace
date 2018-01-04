<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @yield('page-title')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/ytplayer.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/theme-gunmetal.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
          rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/fileinput.css') }}" rel="stylesheet">
</head>
<body class="scroll-assist">
<div class="nav-container">
    <a id="top"></a>
    <nav>
        <div class="nav-utility">
            <div class="module left">
                <i class="ti-location-arrow">&nbsp;</i>
                <span class="sub">68 Cardamon Place, Melbourne Vic 3000</span>
            </div>
            <div class="module left">
                <i class="ti-email">&nbsp;</i>
                <span class="sub">hello@foundry.net</span>
            </div>
        </div>
        <div class="nav-bar">
            <div class="module left">
                <a href="index.html">
                    <img class="logo logo-light" alt="Foundry" src="{{ asset('img/logo-light.png') }}"/>
                    <img class="logo logo-dark" alt="Foundry" src="{{ asset('img/logo-dark.png') }}"/>
                </a>
            </div>
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group right">
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
                            <a href="#">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="#">
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
    @yield('title-section')
    @yield('content')
    <footer class="footer-1 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img alt="Logo" class="logo" src="img/logo-light.png"/>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Recent Posts</h6>
                        <hr>
                        <ul class="link-list recent-posts">
                            <li>
                                <a href="#">Hugging pugs is super trendy</a>
                                <span class="date">February
                                            <span class="number">14, 2015</span>
                                        </span>
                            </li>
                            <li>
                                <a href="#">Spinning vinyl is oh so cool</a>
                                <span class="date">February
                                            <span class="number">9, 2015</span>
                                        </span>
                            </li>
                            <li>
                                <a href="#">Superior theme design by pros</a>
                                <span class="date">January
                                            <span class="number">27, 2015</span>
                                        </span>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Latest Updates</h6>
                        <hr>
                        <div class="twitter-feed">
                            <div class="tweets-feed" data-feed-name="mrareweb">
                            </div>
                        </div>
                    </div>
                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Instagram</h6>
                        <hr>
                        <div class="instafeed" data-user-name="mrareweb">
                            <ul></ul>
                        </div>
                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@yield('additional-script')
</body>
</html>
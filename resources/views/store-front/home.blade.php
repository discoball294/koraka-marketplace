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
                        <form class="search-form">
                            <input type="text" placeholder="Type Here"/>
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
                    <ul class="menu">
                        @if(Auth::check())
                            <li class="has-dropdown">
                                <a href="#">{{ Auth::user()->name }}</a>
                                <ul>
                                    <li>
                                        <a href="#">Profile</a>
                                    </li>

                                    @if($user->myStore()->exists())
                                        <li>
                                            <a href="{{ route('storefront.mystore',$user->myStore()->first()->url_toko) }}">Toko</a>
                                        </li>
                                    @else
                                        <li>

                                            <a href="{{ route('mystore.create') }}">Buka Toko</a>
                                        </li>
                                    @endif

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">{{ csrf_field() }}</form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                        @endif
                    </ul>
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
                            <a href="{{ route('storefront.product-single',$item->id) }}">
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
    <section class="pt40 pb40 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center pt8">
                    <ul class="list-inline social-list">
                        <li>
                            <a href="#">
                                <i class="ti-twitter-alt icon icon-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-facebook icon icon-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-dribbble icon icon-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-vimeo-alt icon icon-sm"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <form class="form-newsletter halves"
                          data-success="Thanks for your registration, we will be in touch shortly."
                          data-error="Please fill all fields correctly.">
                        <input type="text" name="email" class="mb0 validate-email validate-required  signup-email-field"
                               placeholder="Email Address"/>
                        <button type="submit" class="mb0">Subscribe</button>
                        <iframe srcdoc="<!-- Begin MailChimp Signup Form --><link href=&quot;https://cdn-images.mailchimp.com/embedcode/classic-081711.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;><style type=&quot;text/css&quot;> #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }   /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */</style><div id=&quot;mc_embed_signup&quot;><form action=&quot;//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=94d040322a&quot; method=&quot;post&quot; id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; class=&quot;validate&quot; target=&quot;_blank&quot; novalidate>    <div id=&quot;mc_embed_signup_scroll&quot;>   <h2>Subscribe to our mailing list</h2><div class=&quot;indicates-required&quot;><span class=&quot;asterisk&quot;>*</span> indicates required</div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-EMAIL&quot;>Email Address  <span class=&quot;asterisk&quot;>*</span></label>   <input type=&quot;email&quot; value=&quot;&quot; name=&quot;EMAIL&quot; class=&quot;required email&quot; id=&quot;mce-EMAIL&quot;></div><div class=&quot;mc-field-group&quot;>  <label for=&quot;mce-FNAME&quot;>First Name </label>    <input type=&quot;text&quot; value=&quot;&quot; name=&quot;FNAME&quot; class=&quot;&quot; id=&quot;mce-FNAME&quot;></div><div class=&quot;mc-field-group&quot;> <label for=&quot;mce-LNAME&quot;>Last Name </label> <input type=&quot;text&quot; value=&quot;&quot; name=&quot;LNAME&quot; class=&quot;&quot; id=&quot;mce-LNAME&quot;></div>   <div id=&quot;mce-responses&quot; class=&quot;clear&quot;>      <div class=&quot;response&quot; id=&quot;mce-error-response&quot; style=&quot;display:none&quot;></div>     <div class=&quot;response&quot; id=&quot;mce-success-response&quot; style=&quot;display:none&quot;></div>   </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    <div style=&quot;position: absolute; left: -5000px;&quot;><input type=&quot;text&quot; name=&quot;b_77142ece814d3cff52058a51f_94d040322a&quot; tabindex=&quot;-1&quot; value=&quot;&quot;></div>    <div class=&quot;clear&quot;><input type=&quot;submit&quot; value=&quot;Subscribe&quot; name=&quot;subscribe&quot; id=&quot;mc-embedded-subscribe&quot; class=&quot;button&quot;></div>    </div></form></div><script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script><!--End mc_embed_signup-->"
                                class="mail-list-form">
                        </iframe>
                    </form>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <footer class="footer-1 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img alt="Logo" class="logo" src="img/logo-dark.png"/>
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
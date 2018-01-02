@extends('store-front.layouts.master')

@section('page-title')
    <title>{{ $product->nama_barang }} - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="product-single">
                        <div class="row mb24 mb-xs-48">
                            <div class="col-md-5 col-sm-6">
                                <div class="image-slider slider-thumb-controls controls-inside">


                                    <div class="flex-viewport">
                                        <ul class="slides">
                                            <li class="gambar" aria-hidden="true">
                                                <img alt="Image" src="{{ asset($product->gambar) }}" draggable="false">
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!--end of image slider-->
                            </div>
                            <div class="col-sm-6">
                                <div class="description">
                                    <h4 class="uppercase">{{ $product->nama_barang }}</h4>
                                    <div class="mb32 mb-xs-24">
                                        <span class="number price old-price"></span>
                                        <span class="number price">Rp. {{ number_format($product->harga,0) }}</span>
                                    </div>
                                    <p>
                                        {{ $product->deskripsi }}
                                    </p>
                                    <ul>
                                        <li>
                                            <strong>STOK:</strong> {{ $product->stok }} left
                                        </li>
                                        <li>
                                            <strong>VIEWS:</strong> {{ $product->getPageViews() }}</li>
                                        <li>
                                            <strong>SELL BY:</strong> <a
                                                    href="{{ route('storefront.mystore',$product->stores->url_toko) }}">{{ $product->stores->nama_toko }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="mb48 mb-xs-24">
                                <form class="add-to-cart" id="atc">
                                    <input type="number" placeholder="QTY" id="qty" min="0" max="{{ $product->stok }}"
                                           value="1">
                                    <input type="submit" value="Add To Cart" id="btn-atc">
                                </form>
                            </div>
                        </div>
                        <!--end of row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="tabbed-content text-tabs">
                                    <ul class="tabs">
                                        <li class="">
                                            <div class="tab-title">
                                                <span>Description</span>
                                            </div>

                                        </li>
                                        <li class="">
                                            <div class="tab-title">
                                                <span>Size Guide</span>
                                            </div>

                                        </li>
                                        <li class="active">
                                            <div class="tab-title">
                                                <span>Ratings</span>
                                            </div>

                                        </li>
                                    </ul>
                                    <ul class="content">
                                        <li class="">
                                            <div class="tab-content">
                                                <p>
                                                    {{ $product->deskripsi }}
                                                </p>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="tab-content">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>Measurement</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Small</th>
                                                        <td>
                                                            <span class="number">16"</span> Neck /
                                                            <span class="number">8"</span> Sleeve
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Medium</th>
                                                        <td>
                                                            <span class="number">18"</span> Neck /
                                                            <span class="number">9"</span> Sleeve
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Large</th>
                                                        <td>
                                                            <span class="number">20"</span> Neck /
                                                            <span class="number">10"</span> Sleeve
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                        <li class="active">
                                            <div class="tab-content">
                                                <ul class="ratings">
                                                    <li>
                                                        <div class="user">
                                                            <ul class="list-inline star-rating">
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                            </ul>
                                                            <span class="bold-h6">Murray Rafferty</span>
                                                            <span class="date number">23/02/2015</span>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate velit
                                                            esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <div class="user">
                                                            <ul class="list-inline star-rating">
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                            </ul>
                                                            <span class="bold-h6">Claire Taurus</span>
                                                            <span class="date number">15/02/2015</span>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate velit
                                                            esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                    </li>
                                                </ul>
                                                <!--end of ratings-->
                                                <h6 class="uppercase">Leave A Rating</h6>
                                                <form class="ratings-form">
                                                    <div class="overflow-hidden">
                                                        <input type="text" placeholder="Your Name">
                                                        <input type="text" placeholder="Email Address">
                                                    </div>
                                                    <div class="select-option">
                                                        <i class="ti-angle-down"></i>
                                                        <select>
                                                            <option selected="" value="Default">Select A Rating</option>
                                                            <option value="1">1 Star</option>
                                                            <option value="2">2 Stars</option>
                                                            <option value="3">3 Stars</option>
                                                            <option value="4">4 Stars</option>
                                                            <option value="5">5 Stars</option>
                                                        </select>
                                                    </div>
                                                    <textarea placeholder="Comment" rows="3"></textarea>
                                                    <input type="submit" value="Leave Comment">
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of text tabs-->
                            </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of product single-->
                </div>
                <!--end of nine col-->
                <div class="col-md-3 hidden-sm">
                    <div class="widget">
                        <h6 class="title">Shop Categories</h6>
                        <hr>
                        <ul class="link-list">
                            @foreach($category_list as $category)
                                <li>
                                    <a href="{{ route('storefront.product',$category->nama_kategori) }}">{{ $category->nama_kategori }}</a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">Search Shop</h6>
                        <hr>
                        <form>
                            <input class="mb0" type="text" placeholder="Type Here"/>
                        </form>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">Popular Items</h6>
                        <hr>
                        <ul class="cart-overview">
                            @foreach($sorted_product as $item)
                                <li>
                                    <a href="{{ route('storefront.product-single',$item->id) }}">
                                        <img alt="Product" src="{{ asset($item->gambar) }}"/>
                                        <div class="description">
                                            <span class="product-title">{{ $item->nama_barang }}</span>
                                            <span class="price number">Rp. {{ number_format($item->harga) }}</span>
                                        </div>
                                    </a>
                                </li>
                                @if($loop->iteration == 4)
                                    @break
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">Returns Policy</h6>
                        <hr>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem antium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae.
                        </p>
                    </div>
                    <!--end of widget-->
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
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
@section('additional-script')
    <script src="{{ asset('js/fileinput.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.js') }}"></script>
    <script>
        $(document).on('ready', function () {
            $("#input-b5").fileinput({
                showCaption: false,
                showUpload: false
            });
            $('li.gambar').zoom({url: '{{ $product->gambar }}'});
            $('#atc').submit(function (e) {
                e.preventDefault();
            });
            $('#btn-atc').click(function () {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('add-cart') }}',
                    data: {
                        id: '{{ $product->id }}',
                        name: '{{ $product->nama_barang }}',
                        qty: $('#qty').val(),
                        price: {{ $product->harga }},
                        image: '{{$product->gambar}}',
                        store_id: '{{ $product->stores->id }}',
                        store_name: '{{ $product->stores->nama_toko }}',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        console.log(result);
                        $('.cart-widget-handle').load(location.href + " .cart-widget-handle>*", "")
                    }
                });
            });
            $("[type='number']").keypress(function (evt) {
                evt.preventDefault();
            });
        });
    </script>
@endsection

@extends('store-front.layouts.master')

@section('page-title')
    <title>{{ $product->nama_barang }} - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section>
        <div class="container">
            @if($owner)
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Info!</strong> Ini adalah produk Anda, Anda tidak bisa melakukan pembelian pada produk ini!
                </div>
            @endif
            <div class="row">

                <div class="col-md-9">
                    <div class="product-single">
                        <div class="row mb24 mb-xs-48">
                            <div class="col-md-5 col-sm-6">

                                <a href="{{ asset($product->gambar) }}" data-lightbox="Product"
                                   data-title="{{$product->nama_barang}}">
                                    <img id="zoom-product" alt="Image" src="{{ asset($product->gambar) }}"
                                         draggable="false" data-zoom-image="{{ asset($product->gambar) }}">
                                </a>

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
                                @if($owner)
                                    <form class="add-to-cart" id="atc">
                                        <a href="{{ route('act-product.edit', $product->id) }}" class="btn btn-filled"
                                           id="btn-atc">EDIT</a>
                                    </form>
                                @else
                                    <form class="add-to-cart" id="atc">
                                        <input type="number" placeholder="QTY" id="qty" min="0"
                                               max="{{ $product->stok }}"
                                               value="1">
                                        <input type="submit" value="Add To Cart" id="btn-atc">
                                    </form>
                                @endif
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
                                                    @foreach($reviews as $review)
                                                        <li>
                                                            <div class="user">
                                                                <ul class="list-inline star-rating">
                                                                    @for($i = 1; $i<=$review->star;$i++)
                                                                        <li>
                                                                            <i class="ti-star"></i>
                                                                        </li>
                                                                    @endfor
                                                                </ul>
                                                                <span class="bold-h6">{{ $review->user->name }}</span>
                                                                <span class="date number">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$review->created_at)->toFormattedDateString() }}</span>
                                                            </div>
                                                            <p>
                                                                {{ $review->comment }}
                                                            </p>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <!--end of ratings-->
                                                @if($buy)
                                                    <h6 class="uppercase">Leave A Rating</h6>
                                                    <form class="ratings-form" method="post"
                                                          action="{{ route('review.store') }}">
                                                        <input type="hidden" name="product_id"
                                                               value="{{ $product->id }}">
                                                        {{ csrf_field() }}
                                                        <div class="select-option">
                                                            <i class="ti-angle-down"></i>
                                                            <select name="star">
                                                                <option selected="" value="Default">Select A Rating
                                                                </option>
                                                                <option value="1">1 Star</option>
                                                                <option value="2">2 Stars</option>
                                                                <option value="3">3 Stars</option>
                                                                <option value="4">4 Stars</option>
                                                                <option value="5">5 Stars</option>
                                                            </select>
                                                        </div>
                                                        <textarea placeholder="Comment" rows="3"
                                                                  name="comment"></textarea>
                                                        <input type="submit" value="Leave Comment">
                                                    </form>
                                                @endif
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
                                    <a href="{{ route('storefront.product-single',$item->slug) }}">
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
    <script src="{{ asset('js/jquery.elevatezoom.js') }}"></script>
    <script>
        $(document).on('ready', function () {
            $('#zoom-product').elevateZoom();
            $("#input-b5").fileinput({
                showCaption: false,
                showUpload: false
            });
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
                        slug: '{{ $product->slug }}',
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

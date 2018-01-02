@extends('store-front.layouts.master')

@section('page-title')
    <title>All Product - Koraka</title>
@endsection
@section('title-section')
    <section class="page-title page-title-4 image-bg overlay parallax">
        <div class="background-image-holder fadeIn">
            <img alt="Background Image" class="background-image" src="{{ asset('img/cover14.jpg') }}"
                 style="display: none;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="uppercase mb0">Short Image</h3>
                </div>
                <div class="col-md-6 text-right">
                    <ol class="breadcrumb breadcrumb-2">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Elements</a>
                        </li>
                        <li class="active">Page Titles</li>
                    </ol>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                            <div class="select-option">
                                <i class="ti-angle-down"></i>
                                <select>
                                    <option selected value="Default">Sort By</option>
                                    <option value="Small">Highest Price</option>
                                    <option value="Medium">Lowest Price</option>
                                    <option value="Larger">Newest Items</option>
                                </select>
                            </div>
                            <!--end select-->
                        </div>
                        <div class="col-md-8 text-right">
                            <span class="input-lh">Displaying 8 of 8 results</span>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row masonry">
                        @foreach($produk as $item)
                            <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                <div class="image-tile outer-title text-center">
                                    <a href="{{ route('storefront.product-single',$item->id) }}">
                                        <img alt="Pic" class="product-thumb" src="{{ asset($item->gambar) }}"/>
                                    </a>
                                    <div class="title">
                                        <a href="{{ route('storefront.product-single',$item->id) }}"><h5
                                                    class="mb0">{{ $item->nama_barang }}</h5></a>
                                        <span class="display-block mb16">Rp. {{ number_format($item->harga,0) }}</span>
                                    </div>
                                </div>
                            </div>
                            <!--end three col-->
                    @endforeach

                    <!--end three col-->
                    </div>
                    <!--end of row-->
                    <div class="text-center mt40">
                        <ul class="pagination">
                            <li>
                                <a href="{{ $produk->url(1) }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            @if($produk->lastPage() > 1)
                                @for($i = 1; $i <= $produk->lastPage(); $i++)
                                    <li class="{{ ($produk->currentPage()==$i ? 'active' : '') }}"><a
                                                href="{{ $produk->url($i) }}">{{ $i }}</a></li>
                                @endfor
                            @endif
                            <li>
                                <a href="{{ $produk->url($produk->lastPage()) }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                <!--end of sidebar-->
            </div>
            <!--end of container row-->
        </div>
    </section>
@endsection

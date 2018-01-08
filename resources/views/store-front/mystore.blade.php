@extends('store-front.layouts.master')

@section('page-title')
    <title>{{ $mystore->nama_toko }} - Koraka</title>
@endsection
@section('title-section')
    <section class="page-title page-title-4 image-bg overlay parallax">
        <div class="background-image-holder fadeIn">
            <img alt="Background Image" class="background-image" src="{{ asset($mystore->gambar) }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="uppercase mb8">{{ $mystore->nama_toko }}</h2>
                    <p class="lead mb0">{{ $mystore->slogan }}</p>
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
                <div class="col-sm-12">
                    <h4 class="uppercase mb8">{{ $mystore->nama_toko }}</h4>
                    <hr>
                    <div class="tabbed-content button-tabs vertical">
                        <ul class="tabs">
                            <li class="active">
                                <div class="tab-title">
                                    <span>Informasi Toko</span>
                                </div>

                            </li>
                        </ul>
                        <ul class="content">
                            <li class="active">
                                <div class="tab-content">
                                    <h5 class="uppercase">Deskripsi Toko</h5>
                                    <hr>
                                    <p>
                                        {{ $mystore->deskripsi }}
                                    </p>
                                    <h5 class="uppercase">Pemilik Toko</h5>
                                    <hr>
                                    <p>
                                        {{ $mystore->user()->first()->name }}
                                    </p>
                                    <a href="mailto:{{ $mystore->user()->first()->email }}">{{ $mystore->user()->first()->email }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end of button tabs-->
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-10"><h4 class="uppercase mb8">Produk dari
                                <strong>{{ $mystore->nama_toko }}</strong></h4></div>
                        <div class="col-sm-2">
                            @if(Auth::id()==$mystore->user()->first()->id)
                                <a href="{{ route('act-product.create') }}" class="btn">Tambah Produk</a>
                            @else
                            @endif
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
                                    <a href="{{ route('storefront.product-single',$item->slug) }}">
                                        <img alt="Pic" class="product-thumb" src="{{ asset($item->gambar) }}"/>
                                    </a>
                                    <div class="title">
                                        <h5 class="mb0">{{ $item->nama_barang }}</h5>
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
                <!--end of sidebar-->
            </div>
            <!--end of container row-->
        </div>
        <!--end of container-->
    </section>
@endsection

@extends('store-front.layouts.master')

@section('page-title')

    <title>Pembelian - Koraka</title>

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
                    <h3 class="uppercase mb0">pembelian</h3>
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
                <div class="col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h5 class="uppercase">List Pembelian Anda</h5>
                    <hr>
                    <table class="table cart mb48 table-hover">
                        <thead>
                        <tr>
                            <th>&nbsp;#</th>
                            <th>Toko</th>
                            <th>Produk</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list_pembelian as $pembelian)
                            <tr class="clickable-row" data-href="{{ route('beli.detail' ,$pembelian->id) }}"
                                style="cursor: pointer" data-toggle="tooltip"
                                data-placement="left"
                                title=""
                                data-original-title="Click for detail">
                                <th scope="row">
                                    <span>{{ $pembelian->id }}</span>
                                </th>
                                <td>
                                    <span>{{$pembelian->products()->first()->stores->nama_toko}}</span>
                                </td>
                                <td>
                                    <span>{{ $pembelian->products->count() }}</span>
                                </td>
                                <td>
                                    <span>Rp. {{ number_format($pembelian->total) }}</span>
                                </td>
                                <td>
                                    <span class="label {{ ($pembelian->status == 0) ? 'label-info' : (($pembelian->status == 1) ? 'label-primary' : (($pembelian->status == 2) ? 'label-warning' : (($pembelian->status == 3) ? 'label-success' : 'label-danger'))) }}">{{ ($pembelian->status == 0) ? 'Menunggu Pembayaran' : (($pembelian->status == 1) ? 'Payment Confirmed' : (($pembelian->status == 2) ? 'Dikirim' : (($pembelian->status == 3) ? 'Selesai' : 'Gagal'))) }}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mt40">
                        <ul class="pagination">
                            <li>
                                <a href="{{ $list_pembelian->url(1) }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            @if($list_pembelian->lastPage() > 1)
                                @for($i = 1; $i <= $list_pembelian->lastPage(); $i++)
                                    <li class="{{ ($list_pembelian->currentPage()==$i ? 'active' : '') }}"><a
                                                href="{{ $list_pembelian->url($i) }}">{{ $i }}</a></li>
                                @endfor
                            @endif
                            <li>
                                <a href="{{ $list_pembelian->url($list_pembelian->lastPage()) }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of items-->

                <!--end of totals-->
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
            $(".clickable-row").click(function () {
                window.location = $(this).data("href");
            });

        });
    </script>
@endsection

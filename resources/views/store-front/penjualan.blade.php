@extends('store-front.layouts.master')

@section('page-title')

    <title>Penjualan - Koraka</title>

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
                    <h3 class="uppercase mb0">Penjualan</h3>
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
                <div class="col-md-2 col-md-offset-8 col-sm-4 col-xs-12">
                    <div class="select-option">
                        <i class="ti-angle-down"></i>
                        <form method="get" id="sort">
                            <select name="sort" id="select-sort">
                                <option value="0">Baru</option>
                                <option value="1">Terkonfirmasi</option>
                                <option value="2">Dikirim</option>
                                <option value="3">Selesai</option>
                                <option value="4">Batal</option>
                            </select>
                        </form>
                    </div>
                    <!--end select-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h5 class="uppercase">Pesanan Masuk</h5>
                    <hr>
                    <table class="table cart mb48 table-hover">
                        <thead>
                        <tr>
                            <th>&nbsp;#</th>
                            <th>Pembeli</th>
                            <th>Produk</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list_penjualan as $penjualan)
                            <tr class="clickable-row" data-href="{{ route('jual.detail' ,$penjualan->id) }}"
                                style="cursor: pointer" data-toggle="tooltip"
                                data-placement="left"
                                title=""
                                data-original-title="Click for detail">
                                <th scope="row">

                                    <span>{{ $penjualan->id }}</span>
                                </th>
                                <td>
                                    <span>{{$penjualan->user()->first()->name}}</span>
                                </td>
                                <td>
                                    <span>{{ $penjualan->products->count() }}</span>
                                </td>
                                <td>
                                    <span>Rp. {{ number_format($penjualan->total) }}</span>
                                </td>
                                <td>
                                    <span class="label {{ ($penjualan->status == 0) ? 'label-info' : (($penjualan->status == 1) ? 'label-primary' : (($penjualan->status == 2) ? 'label-warning' : (($penjualan->status == 3) ? 'label-success' : 'label-danger'))) }}">{{ ($penjualan->status == 0) ? 'New' : (($penjualan->status == 1) ? 'Payment Confirmed' : (($penjualan->status == 2) ? 'Dikirim' : (($penjualan->status == 3) ? 'Selesai' : 'Gagal'))) }}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mt40">
                        <ul class="pagination">
                            <li>
                                <a href="{{ $list_penjualan->url(1) }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            @if($list_penjualan->lastPage() > 1)
                                @for($i = 1; $i <= $list_penjualan->lastPage(); $i++)
                                    <li class="{{ ($list_penjualan->currentPage()==$i ? 'active' : '') }}"><a
                                                href="{{ $list_penjualan->url($i) }}">{{ $i }}</a></li>
                                @endfor
                            @endif
                            <li>
                                <a href="{{ $list_penjualan->url($list_penjualan->lastPage()) }}" aria-label="Next">
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
            $('#select-sort').val({{ \Illuminate\Support\Facades\Input::get('sort',0) }});
            $('#select-sort').change(function () {
                $('#sort').submit();
            });

        });
    </script>
@endsection

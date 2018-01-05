@extends('admin.layouts.master')
@section('title')
    <title>Detail Reservasi - Riverstone - Hotel & cottage - Admin Page</title>
@endsection
@section('plugins_css')
    <link href="{{ asset('admin-assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('css/lightbox.css') }}"
          rel="stylesheet"
          type="text/css"/>
    <style>
        td {
            max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endsection
@section('content')
    <div class="page-content" style="min-height: 1434px;">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title"> Reservation Detail View
            <small>view reservation details</small>
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Reservation Details</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- Begin: life time stats -->
                <div class="portlet light portlet-fit portlet-datatable ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase"> Invoice ID #{{ $transaksi->invoice_id }}
                                <span class="hidden-xs">|
                                    </span>
                                        </span>
                        </div>
                        <div class="actions">

                            <form method="post" action="">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $transaksi->id }}" name="id">
                                <input type="submit" name="btn"
                                       class="btn btn-transparent green btn-outline btn-lg active"
                                       value="Confirm Payment"
                                >
                            </form>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs nav-tabs-lg">
                                <li class="active">
                                    <a href="#tab_1" data-toggle="tab"> Details </a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="portlet yellow-crusta box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-info-circle"></i>Order Details
                                                    </div>
                                                    <div class="actions">

                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Invoice ID #:</div>
                                                        <div class="col-md-7 value"> {{ $transaksi->id }}
                                                            {{--@if($reservasi->status==1 || $reservasi->status==2)
                                                                <span class="label label-info label-sm"> Email confirmation was sent </span>
                                                            @else
                                                                <span class="label label-danger"> Email confirmation wasn't sent </span>
                                                            @endif--}}
                                                        </div>
                                                    </div>
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Order Created Date &amp; Time:</div>
                                                        <div class="col-md-7 value"> {{ $transaksi->created_at }} </div>
                                                    </div>
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Payment Status:</div>
                                                        <div class="col-md-7 value">
                                                            <span class="label {{ ($transaksi->status == 0) ? 'label-info' : (($transaksi->status == 1) ? 'label-primary' : (($transaksi->status == 2) ? 'label-warning' : (($transaksi->status == 3) ? 'label-success' : 'label-danger'))) }}">{{ ($transaksi->status == 0) ? 'Menunggu Pembayaran' : (($transaksi->status == 1) ? 'Payment Confirmed' : (($transaksi->status == 2) ? 'Dikirim' : (($transaksi->status == 3) ? 'Selesai' : 'Gagal'))) }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Grand Total:</div>
                                                        <div class="col-md-7 value">
                                                            Rp. {{ number_format($transaksi->total) }} </div>
                                                    </div>
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Bukti transfer:</div>
                                                        <div class="col-md-7 value"> @if($transaksi->bukti()->exists())
                                                                <a href="{{ asset($transaksi->bukti->gambar) }}"
                                                                   data-lightbox="bukti{{$transaksi->id}}"
                                                                   data-title="Bukti Transfer {{ $transaksi->invoice_id }}">Lihat</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="portlet blue-hoki box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-user"></i>Customer Information
                                                    </div>
                                                    <div class="actions">

                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Customer Name:</div>
                                                        <div class="col-md-7 value"> {{ $transaksi->user->name }} </div>
                                                    </div>
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Email:</div>
                                                        <div class="col-md-7 value"> {{ $transaksi->user->email }} </div>
                                                    </div>
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Phone Number:</div>
                                                        <div class="col-md-7 value"> {{ $transaksi->user->alamat->no_telp }} </div>
                                                    </div>
                                                    <div class="row static-info">
                                                        <div class="col-md-5 name"> Shipping Address:</div>
                                                        <div class="col-md-7 value"> {{ $transaksi->user->alamat->alamat }}
                                                            , {{ $transaksi->user->alamat->kota }}
                                                            , {{ $transaksi->user->alamat->provinsi }}
                                                            , {{ $transaksi->user->alamat->kode_pos }} </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="portlet grey-cascade box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-shopping-cart"></i>Shopping Cart
                                                    </div>
                                                    <div class="actions">

                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-bordered table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>&nbsp;#</th>
                                                                <th>Item</th>
                                                                <th>Harga</th>
                                                                <th>Qty</th>
                                                                <th>Total</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach($transaksi->products as $product)
                                                                <tr>
                                                                    <th scope="row">

                                                                        <span>{{ $product->id }}</span>
                                                                    </th>
                                                                    <td>
                                                                        <span>{{ $product->nama_barang }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>Rp. {{ number_format($product->pivot->price) }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>{{ $product->pivot->qty }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>Rp. {{ number_format($product->pivot->total) }}</span>
                                                                    </td>

                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="well">
                                                <div class="row static-info align-reverse">
                                                    <div class="col-md-8 name"> Sub Total:</div>
                                                    <div class="col-md-3 value">
                                                        Rp. {{ number_format($transaksi->total) }} </div>
                                                </div>

                                                {{--<div class="row static-info align-reverse">
                                                    <div class="col-md-8 name"> Total Paid:</div>
                                                    @if($reservasi->status==1)
                                                        <div class="col-md-3 value">
                                                            Rp. {{ number_format($total+$unik,0,'.','.') }} </div>
                                                    @else
                                                        <div class="col-md-3 value"> Rp. 0</div>
                                                    @endif

                                                </div>--}}

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
            </div>
        </div>
    </div>

@endsection
@section('plugins_js')
    <script src="{{ asset('admin-assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"
            type="text/javascript">
    </script>
    <script src="{{ asset('js/lightbox.js') }}"
            type="text/javascript"></script>
    <script>


    </script>

@endsection
@extends('store-front.layouts.master')

@section('page-title')

    <title>Detail Pembelian #{{ $transaksi->id }} - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <!--end of items-->
                <div class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 ">
                    {{--<div class="mb24">
                        <h5 class="uppercase">Calculate Shipping</h5>
                        <div class="select-option">
                            <i class="ti-angle-down"></i>
                            <select>
                                <option selected="" value="Default">Select Country</option>
                                <option value="aus">Australia</option>
                                <option value="ind">India</option>
                                <option value="uk">United Kingdom</option>
                                <option value="usa">United States</option>
                            </select>
                        </div>
                        <!--end select-->
                        <form>
                            <input class="hollow" type="submit" value="Calculate Shipping">
                        </form>
                    </div>--}}
                    <div class="mb24">
                        <h5 class="uppercase">Info Pengiriman</h5>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">ID#</th>
                                <td>{{ $transaksi->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td><strong>{{ $transaksi->user->name }}</strong></td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td><a href="mailto:{{ $transaksi->user->email }}">{{ $transaksi->user->email }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Tel</th>
                                <td>
                                    <a href="tel:{{ $transaksi->user->alamat->no_telp }}">{{ $transaksi->user->alamat->no_telp }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>
                                    <strong>{{ $transaksi->user->alamat->alamat }}
                                        , {{ $transaksi->user->alamat->kota }}
                                        , {{ $transaksi->user->alamat->provinsi }}
                                        , {{ $transaksi->user->alamat->kode_pos }}</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb24">
                        <h5 class="uppercase">Info Pembayaran</h5>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">Total</th>
                                <td>Rp. {{ number_format($transaksi->total) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>
                                    <span class="label {{ ($transaksi->status == 0) ? 'label-info' : (($transaksi->status == 1) ? 'label-primary' : (($penjualan->status == 2) ? 'label-warning' : (($transaksi->status == 3) ? 'label-success' : 'label-danger'))) }}">{{ ($transaksi->status == 0) ? 'Waiting' : (($transaksi->status == 1) ? 'Payment Confirmed' : (($transaksi->status == 2) ? 'Dikirim' : (($transaksi->status == 3) ? 'Diterima' : 'Gagal'))) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">No Resi</th>
                                <td>{{ $transaksi->resi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Bukti Transfer</th>
                                <td>
                                    @if($transaksi->bukti()->exists())
                                        <a href="{{ asset($transaksi->bukti->gambar) }}" data-lightbox="Gallery">
                                            Lihat
                                        </a>
                                    @else
                                        Belum upload
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <form>
                            <input class="hollow" type="submit" value="Diterima">
                        </form>
                        <form>
                            <input class="hollow" type="submit" value="Print Invoice">
                        </form>
                        @if($transaksi->status == 0 && !$transaksi->bukti()->exists())
                            <div class="modal-container">
                                <a class="btn btn-lg btn-modal" href="#" modal-link="2" style="width: 100%">
                                    <i class="ti-upload"></i> Upload Bukti Transfer</a>
                                <div class="foundry_modal text-center">
                                    <h3 class="uppercase">Upload bukti transfer anda</h3>
                                    <p class="lead mb48">
                                        Tunggu maksimal 2 x 24 jam untuk proses verifikasi pembayaran.
                                    </p>
                                    <form class="halves" method="post" action="{{ route('upload-bukti') }}"
                                          enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="transaksi_id" value="{{ $transaksi->id }}">
                                        <input type="file" name="gambar"
                                               class="mb0">
                                        <button type="submit" class="btn-white mb0">Upload</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <h5 class="uppercase">List Produk</h5>
                    <hr>
                    <table class="table cart mb48 table-hover">
                        <thead>
                        <tr>
                            <th>&nbsp;#</th>
                            <th>Produk</th>
                            <th>Nama</th>
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
                                    <a href="{{ route('storefront.product-single',$product->id) }}">
                                        <img alt="Product" class="product-thumb"
                                             src="{{ asset($product->gambar) }}">
                                    </a>
                                </td>
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
            $('.remove-item').click(function () {
                $(this).closest('form').submit()
            })


        });
    </script>
@endsection

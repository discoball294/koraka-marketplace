@extends('store-front.layouts.master')

@section('page-title')

    <title>Checkout - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <h4 class="uppercase">Billing Details</h4>
                        <hr>
                    </div>
                    @if(Auth::check())
                        <form class="customer-details mb80 mb-xs-40" method="post" action="{{ route('order.store') }}">
                            {{ csrf_field() }}
                            <div class="input-with-label col-sm-12 text-left">
                                <span>Nama Lengkap:</span>
                                <input type="text" value="{{ $user->name }}" readonly>
                            </div>
                            <div class="input-with-label col-sm-12 text-left">
                                <span>Shipping Address:</span>
                                <input type="text" name="alamat"
                                       placeholder="Nama gedung, Jalan, Kecamatan dan lainnya..."
                                       value="{{ $user->alamat->alamat }}">
                            </div>
                            <div class="input-with-label col-sm-6 text-left">
                                <span>Provinsi:</span>
                                <div class="select-option">
                                    <i class="ti-angle-down"></i>
                                    <select class="provinsi">
                                        <option selected="" disabled value="Default">Pilih Provinsi</option>
                                    </select>
                                    <input type="hidden" name="provinsi">
                                </div>
                            </div>
                            <div class="input-with-label col-sm-6 text-left">
                                <span>Kota:</span>
                                <div class="select-option">
                                    <i class="ti-angle-down"></i>
                                    <select class="kota">
                                        <option selected="" disabled value="Default">Pilih Kota</option>
                                    </select>
                                    <input type="hidden" name="kota">
                                </div>
                            </div>
                            <div class="input-with-label col-sm-6 text-left">
                                <span>Tel:</span>
                                <input type="tel" placeholder="Phone Number" name="no_telp"
                                       value="{{ $user->alamat->no_telp }}">
                            </div>
                            <div class="input-with-label col-sm-6 text-left">
                                <span>Kode Pos:</span>
                                <input type="text" placeholder="Kode Pos" name="kode_pos"
                                       value="{{ $user->alamat->kode_pos }}">
                            </div>
                        </form>
                    @else
                        <form class="customer-details mb80 mb-xs-40" method="post" action="{{ route('order.store') }}">
                            {{ csrf_field() }}
                            <div class="input-with-label col-sm-12 text-left">
                                <span>Nama Lengkap:</span>
                                <input type="text" name="nama">
                            </div>
                            <div class="input-with-label col-sm-12 text-left">
                                <span>Email:</span>
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <div class="input-with-label col-sm-12 text-left">
                                <span>Password:</span>
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="input-with-label col-sm-12 text-left">
                                <span>Shipping Address:</span>
                                <input type="text" name="alamat"
                                       placeholder="Nama gedung, Jalan, Kecamatan dan lainnya...">
                            </div>
                            <div class="input-with-label col-sm-6 text-left">
                                <span>Provinsi:</span>
                                <div class="select-option">
                                    <i class="ti-angle-down"></i>
                                    <select class="provinsi">
                                        <option selected="" disabled value="Default">Pilih Provinsi</option>
                                    </select>
                                    <input type="hidden" name="provinsi">
                                </div>
                            </div>
                            <div class="input-with-label col-sm-6 text-left">
                                <span>Kota:</span>
                                <div class="select-option">
                                    <i class="ti-angle-down"></i>
                                    <select class="kota">
                                        <option selected="" disabled value="Default">Pilih Kota</option>
                                    </select>
                                    <input type="hidden" name="kota">
                                </div>
                            </div>
                            <div class="input-with-label col-sm-6 text-left">
                                <span>Tel:</span>
                                <input type="tel" placeholder="Phone Number" name="no_telp">
                            </div>
                            <div class="input-with-label col-sm-6 text-left">
                                <span>Kode Pos:</span>
                                <input type="text" placeholder="Kode Pos" name="kode_pos">
                            </div>
                            <hr>
                            <div class="overflow-hidden">
                                <div class="col-sm-12">
                                    <span class="pull-left">Sign me up</span>
                                    <div class="checkbox-option pull-right checked">
                                        <div class="inner"></div>
                                        <input type="checkbox" name="checkbox" value="Checkbox" checked>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif

                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <h4 class="uppercase">Order Summary</h4>

                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Item</th>
                            <th> Quantity</th>
                            <th> Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart = Cart::content() as $item)
                            <tr>
                                <td><span>{{ $item->name }}</span></td>
                                <td><span>{{ $item->qty }}</span></td>
                                <td><span>Rp. {{ number_format($item->price) }}</span></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">Cart Subtotal</th>
                            <td>Rp. {{ $cart_total }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Services Fee</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">Order Total</th>
                            <td>
                                <strong>Rp. {{ $cart_total }}</strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <form class="halves text-center">
                        <a class="btn btn-lg pull-left" href="#">Back To Cart</a>
                        <a class="btn btn-lg btn-filled pull-right" href="javascript:void(0)" id="submit-order">Submit
                            Order</a>

                    </form>
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
    <script src="{{ asset('js/select.by.text.js') }}"></script>
    <script>
        $(document).on('ready', function () {
            $('input[name=provinsi]').val('{{ @$user->alamat->provinsi }}');
            $('input[name=kota]').val('{{ @$user->alamat->kota }}');
            $("#input-b5").fileinput({
                showCaption: false,
                showUpload: false
            });
            $.getJSON("https://crossorigin.herokuapp.com/https://api.rajaongkir.com/starter/province?key=8ec565847b06a05165b88a09a6fb572d", null, function (data) {
                $.each(data.rajaongkir.results, function (index, item) { // Iterates through a collection
                    $(".provinsi").append( // Append an object to the inside of the select box
                        $("<option></option>") // Yes you can do this.
                            .text(item.province)
                            .val(item.province_id)
                    );
                    $('.provinsi').selectOptionWithText('{{ @$user->alamat->provinsi }}');
                });
            });
            $('.provinsi').change(function () {
                var province_id = $(this).val();
                $('input[name=provinsi]').val($('option:selected', this).text());
                $.getJSON("https://crossorigin.herokuapp.com/https://api.rajaongkir.com/starter/city?key=8ec565847b06a05165b88a09a6fb572d", {
                    province: province_id
                }, function (data) {
                    console.log(data);
                    $(".kota option").remove(); // Remove all <option> child tags.
                    $.each(data.rajaongkir.results, function (index, item) { // Iterates through a collection
                        $(".kota").append( // Append an object to the inside of the select box
                            $("<option></option>") // Yes you can do this.
                                .text(item.type + " " + item.city_name)
                                .val(item.city_id)
                        );

                        $('.kota').selectOptionWithText('{{ @$user->alamat->kota }}');
                    });
                });
            });
            $('.kota').change(function () {
                $('input[name=kota]').val($('option:selected', this).text());
                console.log($('option:selected', this).text())
            });
            $('#submit-order').click(function () {
                $('.customer-details').submit()
            })


        });
    </script>
@endsection

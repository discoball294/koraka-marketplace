@extends('store-front.layouts.master')

@section('page-title')

    <title>Shopping Cart - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    @foreach($cart_content as $cart)
                        <h5 class="uppercase">Pembelian dari <a
                                    href="{{ route('storefront.mystore',\App\Store::find($cart[0]->options->store_id)->first()->url_toko) }}">
                                <strong>{{ $cart[0]->options->store_name }}</strong></a></h5>
                        <table class="table cart mb48">
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Product</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($store_total = 0)
                            @foreach($cart as $content)

                                <tr>
                                    <th scope="row">

                                        <form action="{{ route('remove-item') }}" method="post" id="delete-item">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="rowId" value="{{ $content->rowId }}">
                                            <a href="javascript:void(0)" class="remove-item" data-toggle="tooltip"
                                               data-placement="top"
                                               title=""
                                               data-original-title="Remove from cart">
                                                <i class="ti-close"></i>
                                            </a>
                                        </form>
                                    </th>
                                    <td>
                                        <a href="{{ route('storefront.product-single',$content->options->slug) }}">
                                            <img alt="Product" class="product-thumb"
                                                 src="{{ asset($content->options->image) }}">
                                        </a>
                                    </td>
                                    <td>
                                        <span><a href="{{ route('storefront.product-single',$content->options->slug) }}">{{ $content->name }}</a></span>
                                    </td>
                                    <td>
                                        <span>{{ $content->qty }}</span>
                                    </td>
                                    <td>
                                        <span>Rp. {{ number_format($content->price) }}</span>

                                    </td>
                                </tr>

                                @php($store_total += $content->price)
                                @if($loop->last)
                                    <tr>
                                        <th scope="row" colspan="4"><span
                                                    class="pull-right"><strong>Subtotal</strong></span></th>
                                        <td><span>Rp. {{ number_format($store_total) }}</span></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    @endforeach
                    <form class="thirds text-center mb-xs-24">
                        <h5 class="uppercase">Add a coupon code</h5>
                        <input type="text" placeholder="Coupon Code">
                        <input class="hollow" type="submit" value="Apply">
                    </form>
                </div>
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
                        <h5 class="uppercase">Your Order Total</h5>
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
                        <form>
                            <a href="{{ route('order.create') }}" class="btn btn-filled btn-lg" style="width: 100%">Proceed
                                To Checkout</a>
                        </form>
                    </div>
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

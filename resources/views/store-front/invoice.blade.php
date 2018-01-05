<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice {{ $transaksi->invoice_id }}</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;

            font-size: 16px;
            line-height: 24px;
            font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body onload="window.print()">
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="6">
                <table>
                    <tr>
                        <td class="title">
                            <img src="{{ asset('img/logo-dark.png') }}" style="width:100%; max-width:300px;">
                        </td>

                        <td>
                            Invoice #: {{ $transaksi->invoice_id }}<br>
                            Created: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $transaksi->created_at)->toFormattedDateString() }}
                            <br>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="6">
                <table>
                    <tr>
                        <td>
                            PT. Koraka<br>
                            The CEO Building, Lt 12<br>
                            Jln. TB Simatupang No. 18c<br>
                            Jakarta Selatan, 12430, Indonesia<br>
                            cs@koraka.id
                        </td>
                        <td>
                            <h3 style="margin:0 0 3px 0">Tujuan Pengiriman</h3>
                            {{ $transaksi->user->name }}<br>
                            {{ $transaksi->user->email }}<br>
                            {{ $transaksi->user->alamat->no_telp}}<br>
                            <strong>{{ $transaksi->user->alamat->alamat }},
                                {{ $transaksi->user->alamat->kota }},
                                <br>{{ $transaksi->user->alamat->provinsi }},
                                {{ $transaksi->user->alamat->kode_pos }}</strong>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                #
            </td>

            <td>
                Item
            </td>

            <td>
                Harga
            </td>
            <td>
                Qty
            </td>
            <td>
                Total
            </td>
        </tr>
        @foreach($transaksi->products as $product)

            <tr class="item {{ ($loop->last)? 'last':'' }}">
                <td>
                    {{ $product->id }}
                </td>

                <td>
                    {{ $product->nama_barang }}
                </td>

                <td>
                    Rp. {{ number_format($product->pivot->price) }}
                </td>

                <td>
                    {{ $product->pivot->qty }}
                </td>

                <td>
                    Rp. {{ number_format($product->pivot->total) }}
                </td>
            </tr>
        @endforeach

        <tr class="total">
            <td colspan="4"></td>

            <td>
                Rp. {{ number_format($transaksi->total) }}
            </td>
        </tr>
    </table>
</div>
</body>
</html>
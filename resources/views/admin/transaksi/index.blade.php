@extends('admin.layouts.master')
@section('title')
    <title>Reservasi - Riverstone - Hotel & cottage - Admin Page</title>
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
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title"> Transaksi
            <small></small>
        </h1>
        @foreach(['danger','success','warning','info'] as $msg)
            @if(Session::has('alert-'.$msg))
                <div class="custom-alerts alert alert-{{ $msg }} fade in">
                    <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true"></button>{{ Session::get('alert-'.$msg) }}</div>
            @endif
        @endforeach
        @if(count($errors) > 0)
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Oops!</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Transaksi</a>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet light portlet-fit">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-shopping-cart"></i>Daftar Transaksi
                        </div>
                        <ul class="pagination pagination-circle" style="margin-right: 10px">
                            {{--{{ $reservasi->appends(['expired'=> $reservasi_expired->currentPage(),'completed'=>$reservasi_completed->currentPage()])->links() }}
                            {{ $reservasi_expired->appends(['new'=> $reservasi->currentPage(),'completed'=>$reservasi_completed->currentPage()])->links() }}
                            {{ $reservasi_completed->appends(['new'=> $reservasi->currentPage(),'expired'=>$reservasi_expired->currentPage()])->links() }}--}}
                            <li><a href="{{ $transaksi->url(1) }}">«</a></li>
                            @if($transaksi->lastPage() > 1)
                                @for($i = 1; $i <= $transaksi->lastPage(); $i++)
                                    <li><a href="{{ $transaksi->url($i) }}">{{ $i }}</a></li>
                                @endfor
                            @endif
                            <li><a href="{{ $transaksi->url($transaksi->lastPage()) }}">»</a></li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Invoice
                                    </th>
                                    <th>
                                        Customer
                                    </th>
                                    <th>
                                        <i class="fa fa-bookmark"></i> Total
                                    </th>
                                    <th>
                                        Bukti Transfer
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transaksi as $item)
                                    <tr>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td class="hidden-xs"> {{ $item->invoice_id }} </td>
                                        <td class="hidden-xs"> {{ $item->user->name }} </td>
                                        <td> Rp. {{ number_format($item->total) }}
                                        </td>
                                        <td>
                                            @if($item->bukti()->exists())
                                                <a href="{{ asset($item->bukti->gambar) }}"
                                                   data-lightbox="bukti{{$item->id}}"
                                                   data-title="Bukti Transfer {{ $item->invoice_id }}">Lihat</a>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="label {{ ($item->status == 0) ? 'label-info' : (($item->status == 1) ? 'label-primary' : (($item->status == 2) ? 'label-warning' : (($item->status == 3) ? 'label-success' : 'label-danger'))) }}">{{ ($item->status == 0) ? 'Menunggu Pembayaran' : (($item->status == 1) ? 'Payment Confirmed' : (($item->status == 2) ? 'Dikirim' : (($item->status == 3) ? 'Selesai' : 'Gagal'))) }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('detail.order',$item->id) }}"
                                               class="btn btn-sm btn-circle btn-default btn-editable"><i
                                                        class="fa fa-search"></i> View</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-pengumuman" tabindex="-1" role="edit-pengumuman" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true"></button>
                    <h4 class="modal-title">Edit Pengumuman</h4>
                </div>
                <form id="form-edit" role="form" method="post">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input type="text" class="form-control" name="edit_judul" id="edit_judul">
                                <label for="edit_judul">Judul</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control datepicker"
                                       data-date-format="yyyy-mm-dd" id="edit_tanggal" name="edit_tanggal">
                                <label for="edit_tanggal">Tanggal</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                                            <textarea id="edit_pengumuman" class="form-control"
                                                                      rows="3" name="edit_pengumuman"></textarea>
                                <label for="edit_pengumuman">Pengumuman</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <select class="form-control edited" name="edit_status" id="edit_status">
                                    <option disabled selected>Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                                <label for="edit_status">Status Pengumuman</label>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline"
                                data-dismiss="modal">Close
                        </button>
                        <button id="btn-edit" type="submit" class="btn green">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@section('plugins_js')
    <script src="{{ asset('admin-assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('js/lightbox.js') }}"
            type="text/javascript"></script>
    <script>

        $(document).ready(function (e) {
            $('.datepicker').datepicker({
                autoclose: true
            });
            $('#btn-tambah').click(function (e) {
                $('#form-tambah').submit();
            });
            $('.edit-btn').click(function (e) {
                var pengumuman_id = $(this).closest('tr').find('#pengumuman_id').text();
                var pengumuman_judul = $(this).closest('tr').find('#pengumuman_judul').text();
                var pengumuman_tanggal = $(this).closest('tr').find('#pengumuman_tanggal').text();
                var pengumuman_status = $(this).closest('td').find('#pengumuman_status').val();
                console.log('clicked');
                $('#edit_judul').val(pengumuman_judul);
                $('#edit_tanggal').val(pengumuman_tanggal);
                $('#edit_status').val(pengumuman_status);
                $('#form-edit').attr('action', '/admins/pengumuman/edit/' + pengumuman_id);
            });
            $('.delete').submit(function (e) {
                var form = this;
                e.preventDefault();
                swal({
                        title: "Apakah anda yakin akan membatalkan pemesanan ini?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Ya!",
                        cancelButtonText: "Tidak!",
                        closeOnConfirm: false,
                        closeOnCancel: true
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            form.submit();
                        } else {
                        }
                    });
            })
        })
    </script>
@endsection
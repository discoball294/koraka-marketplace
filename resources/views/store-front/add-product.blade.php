@extends('store-front.layouts.master')

@section('page-title')
    <title>Add Product - Koraka</title>

@endsection
@section('title-section')
    <section class="page-title page-title-4 image-bg overlay">
        <div class="background-image-holder fadeIn" style="background: url('{{ asset('img/cover14.jpg') }}');">
            <img alt="Background Image" class="background-image" src="{{ asset('img/cover05.jpg') }}"
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
                <form action="{{ route('act-product.store') }}" enctype="multipart/form-data" method="post">
                    <div class="col-sm-6">
                        <h4 class="uppercase mb16">Apa yang anda jual</h4>
                        <hr>
                        <div class="input-with-label text-left">
                            <span>Nama Produk:</span>
                            <input type="text" placeholder="Masukkan Nama Produk" name="nama">
                        </div>
                        <div class="input-with-label text-left">
                            <span>Kategori:</span>
                            <div class="select-option">
                                <i class="ti-angle-down"></i>
                                <select name="kategori">
                                    <option selected="" disabled value="Default">Pilih Kategori</option>
                                    @foreach($category_list as $category)
                                        <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <h4 class="uppercase mb16">Gambar Produk</h4>
                        <hr>
                        <input id="input-b5" name="gambar" type="file" multiple>

                    </div>
                    <div class="col-sm-6">
                        <h4 class="uppercase mb16">Detail Produk</h4>
                        <hr>
                        <div class="input-with-label text-left">
                            <span>Harga:</span>
                            <input type="text" placeholder="Masukkan Harga" name="harga">
                        </div>
                        <div class="input-with-label text-left">
                            <span>Stok:</span>
                            <input type="text" placeholder="Masukkan Stok" name="stok">
                        </div>
                        <div class="input-with-label text-left">
                            <span>Deskripsi:</span>
                            <textarea placeholder="Masukkan deskripsi" rows="5" name="deskripsi"></textarea>
                        </div>
                        <input type="hidden" name="store_id" value="{{ $user->myStore->id }}">
                        {{ csrf_field() }}
                        <input type="submit" value="Submit Button">
                    </div>
                </form>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
@section('additional-script')
    <script src="{{ asset('js/fileinput.js') }}"></script>
    <script>
        $(document).on('ready', function () {
            $("#input-b5").fileinput({
                showCaption: false,
                showUpload: false
            });
        });
    </script>
@endsection

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
                <form action="{{ route('mystore.store') }}" enctype="multipart/form-data" method="post">
                    <div class="col-sm-6">
                        <h4 class="uppercase mb16">Informasi Toko</h4>
                        <hr>
                        <div class="input-with-label text-left">
                            <span>Nama Toko:</span>
                            <input type="text" placeholder="Masukkan Nama Toko" name="nama">
                        </div>
                        <div class="input-with-label text-left">
                            <span>Slogan:</span>
                            <input type="text" placeholder="Masukkan Slogan Toko" name="slogan">
                        </div>
                        <div class="input-with-label text-left">
                            <span>URL Toko:</span>
                            <input type="text" placeholder="Masukkan URL Toko" name="url_toko">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="uppercase mb16">Detail Toko</h4>
                        <hr>
                        <div class="input-with-label text-left">
                            <span>Deskripsi:</span>
                            <textarea placeholder="Masukkan deskripsi" rows="5" name="deskripsi"></textarea>
                        </div>
                        <div class="input-with-label text-left">
                            <span>Gambar:</span>
                            <input id="input-b5" name="gambar" type="file" multiple>
                        </div>

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

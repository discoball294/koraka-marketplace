@extends('store-front.layouts.master')

@section('page-title')
    <title>Edit Product {{ $product->nama_barang }} - Koraka</title>

@endsection
@section('title-section')

@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <form action="{{ route('act-product.update', $product->id) }}" enctype="multipart/form-data"
                      method="post">
                    <div class="col-sm-6">
                        <h4 class="uppercase mb16">Apa yang anda jual</h4>
                        <hr>
                        <div class="input-with-label text-left">
                            <span>Nama Produk:</span>
                            <input type="text" placeholder="Masukkan Nama Produk" name="nama"
                                   value="{{ $product->nama_barang }}">
                        </div>
                        <div class="input-with-label text-left">
                            <span>Kategori:</span>
                            <div class="select-option">
                                <i class="ti-angle-down"></i>
                                <select name="kategori" id="kategori">
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
                            <input type="text" placeholder="Masukkan Harga" name="harga" value="{{ $product->harga }}">
                        </div>
                        <div class="input-with-label text-left">
                            <span>Stok:</span>
                            <input type="text" placeholder="Masukkan Stok" name="stok" value="{{ $product->stok }}">
                        </div>
                        <div class="input-with-label text-left">
                            <span>Deskripsi:</span>
                            <textarea placeholder="Masukkan deskripsi" rows="5"
                                      name="deskripsi">{{ $product->deskripsi }}</textarea>
                        </div>
                        <input type="hidden" name="store_id" value="{{ $user->myStore->id }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <input type="submit" value="Simpan">
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
            $('#kategori').val('{{ $product->kategori_id }}');
            $("#input-b5").fileinput({
                showCaption: false,
                showUpload: false
            });
        });
    </script>
@endsection

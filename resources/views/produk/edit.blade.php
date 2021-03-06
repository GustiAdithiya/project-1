@extends('produk.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Edit Data Produk</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('produk.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('produk.update',$produk->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama Produk" value="{{ $produk->nama }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                <!-- <input type="text" name="kategori" value="{{ $produk->kategori }}" class="form-control" placeholder="Kategori"> -->
                <select class="form-select" name="kategori">
                    <option value="Pertanian" <?php if ($produk->kategori == 'Pertanian') {
                                                    echo 'selected';
                                                } ?>>Pertanian</option>
                    <option value="Perikanan" <?php if ($produk->kategori == 'Perikanan') {
                                                    echo 'selected';
                                                } ?>>Perikanan</option>
                    <option value="Perkebunan" <?php if ($produk->kategori == 'Perkebunan') {
                                                    echo 'selected';
                                                } ?>>Perkebunan</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok:</strong>
                <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control" placeholder="Stok">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:<br></strong>
                <img src="/image/{{ $produk->image }}" width="200px">
                <input type="file" name="image" class="form-control">
                <input type="hidden" name="imagelama" value="{{ $produk->image }}">
            </div>
        </div>
        <?php

        use Illuminate\Support\Facades\Auth;

        if (Auth::user()->akses == "1") {
            echo '<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Mitra:</strong>
                <input type="text" name="idmitra" class="form-control" value="' . $produk->idmitra . '" placeholder="Mitra">
            </div>
            </div>';
        } else {
            echo '<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="hidden" name="idmitra" class="form-control" value="' . $produk->idmitra . '" placeholder="Mitra">
            </div>
            </div>';
        }
        ?>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <strong><br></strong>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <strong><br></strong>
        </div>

</form>
@endsection
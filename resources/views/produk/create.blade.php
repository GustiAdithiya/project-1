@extends('produk.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Tambah Data Produk</h2>
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

<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                <!-- <input type="text" name="kategori" class="form-control" placeholder="Kategori"> -->
                <select class="form-select" name="kategori">
                    <option>-- Pilih Kategori --</option>
                    <option value="Pertanian">Pertanian</option>
                    <option value="Perikanan">Perikanan</option>
                    <option value="Perkebunan">Perkebunan</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="number" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok:</strong>
                <input type="number" name="stok" class="form-control" placeholder="Stok">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="Image">
            </div>
        </div>
        <?php

        use Illuminate\Support\Facades\Auth;

        if (Auth::user()->akses == "1") {
            echo '<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Mitra:</strong>
                <input type="text" name="idmitra" class="form-control" placeholder="Mitra">
            </div>
            </div>';
        } else {
            echo '<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="hidden" name="idmitra" class="form-control" value="' . Auth::user()->akses . '" placeholder="Mitra">
            </div>
            </div>';
        }
        ?>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <strong><br></strong>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

</form>
@endsection
@extends('produk.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2> Show Produk</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('produk.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $produk->nama }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kategori:</strong>
            {{ $produk->kategori }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            <img src="/image/{{ $produk->image }}" width="500px">
        </div>
    </div>
</div>
@endsection
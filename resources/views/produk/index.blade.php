@extends('produk.layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>CRUD Data Produk</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('produk.create') }}"> Tambah Data Produk</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">No</th>
        <th>Image</th>
        <th>Nama</th>
        <th width="250px" class="text-center">Kategori</th>
        <th width="250px" class="text-center">Harga</th>
        <th width="100px" class="text-center">Stok</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($produk as $produks)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td><img src="/image/{{ $produks->image }}" width="100px"></td>
        <td>{{ $produks->nama }}</td>
        <td>{{ $produks->kategori }}</td>
        <td>{{ $produks->harga }}</td>
        <td>{{ $produks->stok }}</td>
        <td class="text-center">
            <form action="{{ route('produk.destroy',$produks->id) }}" method="POST">

                <a class="btn btn-info btn-sm" href="{{ route('produk.show',$produks->id) }}">Show</a>

                <a class="btn btn-primary btn-sm" href="{{ route('produk.edit',$produks->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
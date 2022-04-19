@extends('produk.layout')

@section('content')
<h1 class="text-center">Edit Data Mitra</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
                            <input type="text" name='namaPt' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->namaPt}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Admin Perusahaan</label>
                            <input type="text" name='namaAdminPt' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->namaAdminPt}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name='jk' aria-label="Default select example">
                                <option selected>{{$data->jk}}</option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No telepon</label>
                            <input type="text" name='notelp' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->notelp}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" name='password' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->password}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
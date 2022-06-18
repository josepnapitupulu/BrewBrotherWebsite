@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <br>
    <form action="{{ url('product')}}" method="post">
    @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Nama Barang">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Harga Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="harga" placeholder="Harga Barang">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputPassword3" name="jenis_id" placeholder="Jenis Barang">
            </div>
        </div><br>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection
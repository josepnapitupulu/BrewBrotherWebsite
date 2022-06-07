@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <br>
    <form action="{{ url('product/'.$model->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="name" value="{{ $model->name }}" placeholder="Email">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Harga Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="harga" value="{{ $model->harga }}" placeholder="Harga Barang">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="jenis_id" value="{{ $model->jenis_id }}" placeholder="Jenis Barang">
            </div>
        </div><br>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection
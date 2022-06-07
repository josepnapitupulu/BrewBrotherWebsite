@extends('layouts.admin')
@section('content')
  <br>
    <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Nama Pembeli</th>
          <th>No Telepon</th>
          <th>Alamat</th>
          <th>Total Pembelian</th>
          <th>Pembayaran</th>
        </tr>
        <?php
          $no = 1;
        ?>
        @foreach ($menus as $menu)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $menu->user->name }}</td>
          <td>{{ $menu->user->nohp }}</td>
          <td>{{ $menu->user->alamat }}</td>
          <td>{{ $menu->total_harga }}</td>
          <td>
            <form action="{{ url('dibeli/'.$menu->id) }}" method="POST" onsubmit="return confirm('Apakah sudah di bayar ?')">
              @csrf
              <input type="hidden" name="_method" value="delete">
            <button class="btn btn-primary" type="submit"><i class="bi bi-cash-coin"></i> sudah bayar</button>
          </form>
        </td>
        </tr>
        @endforeach
    </table>
@endsection
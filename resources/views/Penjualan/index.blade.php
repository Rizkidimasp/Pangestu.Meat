@extends('layouts.app')

<?php $no=1?>
@section('content')
  <h3>Data Daging</h3>
  <a href="{{route('penjualan.create')}}" class="btn btn-success">Tambah Data</a>
  <img src="url('public/image/Logo.png')">
  <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis</th>
          <th>Harga</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($penjualans as $penjualan)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$penjualan->Nama}}</td>
              <td>{{$penjualan->Jenis}}</td>
              <td>{{$penjualan->Harga}}</td>
              <td>{{$penjualan->Deskripsi}}</td>
              <td>
                <a href="{{route('penjualan.edit',$penjualan->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{route('penjualan.destroy',$penjualan->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
        @endforeach
      </tbody>
  </table>
@stop
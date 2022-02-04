@extends('layouts.app')

@section('content')
<h3>Edit Daging</h3>

<form method="post" action="{{route('penjualan.update',$penjualan->id)}}">
  @csrf
  @method('put')
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" value="{{$penjualan->Nama}}" name="Nama" >
    </div>
    <div class="form-group">
      <label for="name">Jenis</label>
      <input type="text" class="form-control" value="{{$penjualan->Jenis}}" name="Jenis" >
    </div>
    <div class="form-group">
      <label for="name">Harga</label>
      <input type="text" class="form-control" value="{{$penjualan->Harga}}" name="Harga" >
    </div>
    <div class="form-group">
      <label for="name">Deskripsi</label>
      <input type="text" class="form-control" value="{{$penjualan->Deskripsi}}" name="Deskripsi" >
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop
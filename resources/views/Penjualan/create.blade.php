@extends('layouts.app')

@section('content')
<h3>Tambah Daging</h3>

<form method="post" action="{{route('penjualan.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form=control" name="Nama">
    </div>
    <div class="form-group">
        <label for="name">Jenis</label>
        <input type="text" class="form=control" name="Jenis">
    </div>
    <div class="form-group">
        <label for="name">Harga</label>
        <input type="text" class="form=control" name="Harga">
    </div>
    <div class="form-group">
        <label for="name">Deskripsi</label>
        <input type="text" class="form=control" name="Deskripsi">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop
@extends('layouts.admin')

@section('title', 'Tambah Barang')
    
@section('content')
    <div class="card">
        <div class="card-body">
            <strong>Tambah Barang</strong>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card-body">
            <form method="post" action="{{route('produkBaru')}}">
                @csrf
                <div class="form-group">
                  <label for="nama_produk">Nama Barang</label>
                  <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Contoh: Baju Wanita Cardigan" value="{{old('nama_produk')}}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control ckeditor" id="keterangan" name="keterangan" rows="2">{{old('keterangan')}}</textarea >
                  </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="20000" value="{{old('harga')}}">
                </div>
                <div class="form-group">
                  <label for="jumlah">Jumlah Produk</label>
                  <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="12" value="{{old('jumlah')}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Tambah</button>
              </form>
        </div>
    </div>
@endsection
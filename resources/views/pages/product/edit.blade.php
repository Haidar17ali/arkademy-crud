@extends('layouts.admin')

@section('title', 'Edit Barang')
    
@section('content')
    <div class="card">
        <div class="card-body">
            <strong>Edit Barang</strong>
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
            <form method="post" action="{{route('update-produk', $item->id)}}">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="nama_produk">Nama Barang</label>
                  <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Contoh: Baju Wanita Cardigan"  value="{{$item->nama_produk}}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control ckeditor" id="keterangan" name="keterangan" rows="2">{{$item->keterangan}}</textarea >
                  </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="20000" value="{{$item->harga}}">
                </div>
                <div class="form-group">
                  <label for="jumlah">Jumlah Produk</label>
                  <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="12" value="{{$item->jumlah}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Edit</button>
              </form>
        </div>
    </div>
@endsection
@extends('layouts.admin')
@section('title', 'Product')
@section('content')
<div class="orders">
    <div class="container">
            <a href="{{route('tambahProduk')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fa fa-plus fa-sm text-white-50"></i> Tambah Produk
            </a>
    </div>

    <div class="row">
        <div class="col-12 p-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Barang</h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->nama_produk}}</td>
                                        <td>{{$item->keterangan}}</td>
                                        <td>Rp.{{number_format($item->harga, 0, ',', '.')}}</td>
                                        <td>{{$item->jumlah}}</td>
                                        <td>
                                            <a href="{{route('edit-produk', $item->id)}}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{route('destroy', $item->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="7">
                                        Data Kosong
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
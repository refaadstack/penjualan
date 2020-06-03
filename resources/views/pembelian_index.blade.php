@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA PEMBELIAN</div>
                <div class="card-body">
                    <div class="row  mb-2">
                        <div class="col-m-2">
                            <a href="{{ url('admin/pembelian/tambah') }}" class="btn btn-primary btn-xs">Tambah</a>
                        </div>
                        <div class="col-md-10">
                            <form action="{{ url('admin/pembelian/laporan') }}" method="GET">
                                Tgl Mulai <input type="date" name="tgl_mulai">
                                Sampai <input type="date" name="tgl_sampai">
                                <button name="button">Laporan</button>
                            </form>
                        </div>
                    </div>
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Barang</th>
                                <th>Nama Pemasok</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Tgl Transaksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obj as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->barang->nama }}</td>
                                    <td>{{ $item->nama_pemasok}}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
<a href="{{ url('admin/pembelian/hapus/'.$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')" > Hapus </a>
</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
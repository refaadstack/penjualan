@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA BARANG</div>
                <div class="card-body">
                    <a href="{{ url('admin/barang/tambah', []) }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obj as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->satuan }}</td>
                                    <td>{{ $item->harga_jual }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>
<a href="{{ \Storage::url($item->gambar) }}">
    <img src="{{ \Storage::url($item->gambar) }}" alt="" width="50">
</a>
                                    </td>
                                    <td>
<a href="{{ url('admin/barang/edit/'.$item->id) }}" class="btn btn-info btn-sm" > Ubah</a>
<a href="{{ url('admin/barang/hapus/'.$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')" > Hapus </a>
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
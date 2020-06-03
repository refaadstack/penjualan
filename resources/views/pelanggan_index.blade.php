@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pelanggan</div>
                <div class="card-body">
                    <a href="{{ url('admin/pelanggan/tambah', []) }}" class="btn btn-primary btn-sm">Tambah</a>
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obj as $item)
                            <tr>
                                    <td scope="row">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        <a href="{{ url('admin/pelanggan/edit/'.$item->id) }}" class="btn btn-info btn-sm" > Ubah</a>
                                        &nbsp;
                                        <a href="{{ url('admin/pelanggan/hapus/'.$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')" > Hapus </a>  
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

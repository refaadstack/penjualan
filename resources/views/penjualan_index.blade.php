@extends('layouts.app')
@section('content')
<div class="container">
    <div class="penjualan justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA PENJUALAN</div>
                <div class="card-body">
<div class="row  mb-2">
    <div class="col-m-2">
        <a href="{{ url('admin/penjualan/tambah') }}" class="btn btn-primary btn-xs">Tambah</a>
    </div>
    <div class="col-md-10">
        <form action="{{ url('admin/penjualan/laporan') }}" method="GET">
            Tgl Mulai <input type="date" name="tgl_mulai">
            Sampai <input type="date" name="tgl_sampai">
            <button name="button">Laporan</button>
        </form>
    </div>
</div>
<table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="5%">NO</th>
                            <th>PELANGGAN</th>
                            <th>TANGGAL TRANSAKSI</th>
                            <th width="10%">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjualans as $penjualan)
                           <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $penjualan->pelanggan->nama }}</td>
                                <td>{{ $penjualan->created_at }}</td>
                                <td>
                                    <a href="javascroipt:void[0]" onclick="PopupCenter('{{ url('admin/penjualan/cetak/'.$penjualan->id) }}','',600,600)" class="btn btn-info">Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper">  {{ $penjualans->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
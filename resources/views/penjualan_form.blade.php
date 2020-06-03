@extends('layouts.app')
@section('content')
<script>
    $(document).ready(function(){
        $("#barang_id").change(function(event) {
            var barang_id = $("#barang_id").val();
            $.get('{{ url('admin/barang/detail') }}/'+barang_id, function(data) {
                $("#harga").val(data.harga_jual);
            });
            $("#jumlah").focus();
        });
 
        $("#jumlah").keyup(function(event){            
            var jumlah = document.getElementById('jumlah').value;
            var harga  = document.getElementById('harga').value;
            var total  = eval(jumlah)*eval(harga);
            document.getElementById('total').value=total;
        });
    })    
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH BARANG</div>
                <div class="card-body">
{{ Form::model($penjualan, array('action' => $action, 'files' => true, 'method' => $method)) }} 
<div class="form-group">
    {{ Form::label('pelanggan_id', 'Nama Pelanggan') }}
    {!! Form::select('pelanggan_id', $pelanggans, null, ['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('pelanggan_id') }}</span>
</div> 
<div class="form-group">
    {{ Form::label('barang_id', 'Nama Barang') }}
    {!! Form::select('barang_id', $barangs, null, ['class'=>'form-control','placeholder'=>'Pilih Barang']) !!}
    <span class="text-danger">{{ $errors->first('barang_id') }}</span>
</div>
<div class="form-group" >
    {{ Form::label('harga', 'Harga Barang') }}
    {!! Form::text('harga',null, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->first('harga') }}</span>
</div>
<div class="form-group">
    {{ Form::label('jumlah', 'Jumlah') }}
    {{ Form::number('jumlah',null,array('class'=>'form-control')) }}
    <span class="text-danger">{{ $errors->first('jumlah') }}</span>
</div>
<div class="form-group">
    {{ Form::label('total', 'Total') }}
    {{ Form::number('total',null,array('class'=>'form-control')) }}
    <span class="text-danger">{{ $errors->first('jumlah') }}</span>
</div>

@if (!empty($id))
    {!! Form::hidden('penjualan_id', $id, []) !!}
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA BARANG</th>
                        <th>HARGA</th>
                        <th>JUMLAH</th>
                        <th>TOTAL</th>
                        <th width="2%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penjualan->details as $detail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $detail->barang->nama }}</td>
                            <td>{{ $detail->harga }}</td>
                            <td>{{ $detail->jumlah }}</td>
                            <td>{{ $detail->harga*$detail->jumlah }}</td>
                            <td><a href="{{ url('admin/penjualan/hapusdetail/'.$detail->id) }}" onclick="return confirm('Anda Yakin ?')" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        @php ($total[] = $detail->harga*$detail->jumlah);
                    @endforeach                    
                </tbody>
                <tr>
                    <td colspan="4">Total</td>
                    <td colspan="2">{{ number_format(@array_sum($total),0,'.','.') }}</td>
                </tr>
            </table>
        </div>
    </div>
@endif
<center>
{!! Form::submit($btn_submit, ['class' => 'btn btn-primary']) !!}
        @if (!empty($id))
            <a href="javascript:void[0]" onclick="PopupCenter('{{ url('admin/penjualan/cetak/'.@$id) }}','',600,600)" class="btn btn-success">PRINT</a>
        @endif
        <a href="{{ url('admin/penjualan/tambah') }}" class="btn btn-info"> INPUT BARU </a>
</center>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

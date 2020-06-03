@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH PEMBELIAN</div>
                <div class="card-body">
                    {{ Form::model($obj, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::label('barang_id', 'ID Barang') }}
                            {{ Form::number('barang_id',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('barang_id') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('nama_pemasok', 'Nama Pemasok') }}
                            {{ Form::text('nama_pemasok',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('nama_pemasok') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('jumlah', 'Jumlah') }}
                            {{ Form::number('jumlah',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('harga', 'HARGA') }}
                            {{ Form::number('harga',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('harga') }}</span>
                        </div>
                        
  
                        <button type="submit" class="btn btn-success">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
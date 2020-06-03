@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH BARANG</div>
                <div class="card-body">
                    {{ Form::model($obj, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::label('nama', 'NAMA') }}
                            {{ Form::text('nama',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('kategori', 'KATEGORI') }}
                            {!! Form::select('kategori', \App\Kategori::pluck('nama','nama'), null, ['class'=> 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('kategori') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('SATUAN', 'SATUAN') }}
                            {{ Form::select('satuan', array('Pcs' => 'Pcs',
                                                            'Tabung' => 'Tabung',
                                                            'Kg' => 'Kg',
                                                            'Lainnya' => 'Lainnya'), 'Psc',array('class'=>'form-control')) }}
 
                            <span class="text-danger">{{ $errors->first('satuan') }}</span>
                        </div>

                        <div class="form-group">
                            {{ Form::label('harga_jual', 'HARGA') }}
                            {{ Form::number('harga_jual',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('harga_jual') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('stok', 'STOK') }}
                            {{ Form::number('stok',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('stok') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('gambar', 'GAMBAR BARANG') }}
                            {!! Form::file('gambar', ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('gambar') }}</span>
                          </div>
  
                        <button type="submit" class="btn btn-success">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
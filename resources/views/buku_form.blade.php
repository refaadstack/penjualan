@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH BUKU</div>
                <div class="card-body">
                    {{ Form::model($obj, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::label('judul', 'NAMA BUKU') }}
                            {{ Form::text('judul',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('judul') }}</span>
                            {{ Form::label('tahun_terbit', 'TAHUN TERBIT') }}
                            {{ Form::text('tahun_terbit',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('tahun_terbit') }}</span>
                            {{ Form::label('pengarang', 'PENGARANG') }}
                            {{ Form::text('pengarang',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('pengarang') }}</span>
                        </div>
                        <button type="submit" class="btn btn-success">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
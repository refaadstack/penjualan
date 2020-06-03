@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH KATEGORI</div>
                <div class="card-body">
                    {{ Form::model($obj, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::label('Nama', 'NAMA KATEGORI') }}
                            {{ Form::text('Nama',null,['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('Nama') }}</span>
                        </div>
                        <button type="submit" class="btn btn-success">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
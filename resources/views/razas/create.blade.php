@extends('adminlte::page')
@section('title', 'Razas')

@section('content_header')
    <h1>Registro de Razas</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'razas.store']) !!}
            <div class="form-group">
                {!! Form::label('raza', 'Raza') !!}
                {!! Form::text('raza',null, ['class'=>'form-control', 'placeholder'=>'Digite la raza']) !!}
                @error('codigo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
           
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
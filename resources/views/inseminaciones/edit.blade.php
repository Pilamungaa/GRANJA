@extends('adminlte::page')
@section('title', 'Editar Inseminaciones')

@section('content_header')
    <h1>Editar Inseminaciones</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($inseminacion,['route'=>['inseminaciones.update',$inseminacion],'method'=>'put']) !!}
    <div class="form-group">
                {!! Form::label('codigo_hembra', 'Código de la hembra') !!}
                {!! Form::text('codigo_hembra',null, ['class'=>'form-control', 'placeholder'=>'Digite el código']) !!}
                @error('codigo_hembra')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">   
            {!! Form::label('raza_hembra', 'Raza de la hembra',['class'=>'form-label']) !!}
            {!! Form::text('raza_hembra',null, ['class'=>'form-control', 'placeholder'=>'Digite la raza']) !!}
                    
                @error('raza_hembra')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('codigo_macho', 'Codigo del macho') !!}
                {!! Form::text('codigo_macho',null, ['class'=>'form-control', 'placeholder'=>'Digite el codigo del macho']) !!}
                @error('tipo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('raza_macho', 'Raza del macho') !!}
                {!! Form::text('raza_macho',null, ['class'=>'form-control', 'placeholder'=>'Digite la raza del macho']) !!}
                @error('raza_macho')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('fecha_inseminacion', 'Fecha de inseminación') !!}
                {!! Form::date('fecha_inseminacion',null, ['class'=>'form-control']) !!}
                @error('fecha_inseminacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="form-group">
                {!! Form::label('observacion', 'Observación') !!}
                {!! Form::text('observacion',null, ['class'=>'form-control', 'placeholder'=>'Digite la observación']) !!}
                @error('observacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
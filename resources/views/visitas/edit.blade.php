@extends('adminlte::page')
@section('title', 'Editar Visitas')

@section('content_header')
    <h1>Editar Visitas</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($visita,['route'=>['visitas.update',$visita],'method'=>'put']) !!}
           
        <div class="form-group">
                {!! Form::label('motivo_visita', 'Motivo de Visita') !!}
                {!! Form::text('motivo_visita',null, ['class'=>'form-control', 'placeholder'=>'Digite el motivo de la visita']) !!}
                @error('motivo_visita')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('fecha_visita', 'Fecha de Visita') !!}
                {!! Form::date('fecha_visita',null, ['class'=>'form-control']) !!}
                @error('fecha_visita')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            
            <div class="form-group">
                {!! Form::label('porcino_tratado', 'Porcino tratado') !!}
                {!! Form::text('porcino_tratado',null, ['class'=>'form-control', 'placeholder'=>'Digite el porcino tratado']) !!}
                @error('porcino_tratado')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                
                {!! Form::label('medicamento_aplicado', 'Medicamento Aplicado') !!}
                {!! Form::text('medicamento_aplicado',null, ['class'=>'form-control', 'placeholder'=>'Digite el medicamento aplicado']) !!}
                @error('medicamento_aplicado')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                
                {!! Form::label('insertar_tratamiento', 'Insertar Receta ') !!}
                {!! Form::text('insertar_tratamiento',null, ['class'=>'form-control', 'placeholder'=>'Digite la receta]) !!}
                @error('insertar_tratamiento')
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
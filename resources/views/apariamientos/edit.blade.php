@extends('adminlte::page')
@section('title', 'Editar Porcinos')

@section('content_header')
    <h1>Editar Porcinos</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($porcino,['route'=>['porcinos.update',$porcino],'method'=>'put']) !!}
        <div class="form-group">
                {!! Form::label('codigo_hembra', 'Código de Reproductora') !!}
                {!! Form::text('codigo_hembra',null, ['class'=>'form-control', 'placeholder'=>'Digite el código de Reproductora']) !!}
                @error('codigo_hembra')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>           
            <div class="form-group">
                {!! Form::label('codigo_macho', 'Tipo') !!}
                {!! Form::text('codigo_macho',null, ['class'=>'form-control', 'placeholder'=>'Digite el codigo de Reproductor']) !!}
                @error('codigo_macho')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('responsable', 'Responsable') !!}
                {!! Form::text('responsable',null, ['class'=>'form-control', 'placeholder'=>'Digite el responsable']) !!}
                @error('responsable')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('fecha_apariamiento', 'Fecha de Apariamiento') !!}
                {!! Form::date('fecha_apariamiento',null, ['class'=>'form-control']) !!}
                @error('fecha_apariamiento')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('fecha_parto', 'Fecha Posible de parto') !!}
                {!! Form::date('fecha_parto',null, ['class'=>'form-control']) !!}
                @error('fecha_parto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">   
            {!! Form::label('jaula', 'Género',['class'=>'form-label']) !!}
            {!! Form::select('jaula', ['gestacion01' => 'Gestacion 01', 'gestacion02' => 'Gestacion 02','gestacion03' => 'Gestacion 03'],'S',['class' => 'form-control']);   !!}        
            
                @error('jaula')
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
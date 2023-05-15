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
                {!! Form::label('codigo', 'Código') !!}
                {!! Form::text('codigo',null, ['class'=>'form-control', 'placeholder'=>'Digite el código']) !!}
                @error('codigo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">   
            {!! Form::label('genero', 'Género',['class'=>'form-label']) !!}
            {!! Form::select('genero', ['Macho' => 'Macho', 'Hembra' => 'Hembra'],old('genero'),['class' => 'form-control']);   !!}        
                @error('genero')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
            {!! Form::label('Tipo', 'Tipo',['class'=>'form-label']) !!}
            {!! Form::select('tipo', ['Reproductor' => 'Reproductor', 'Reproductora' => 'Reproductora','Lechon' => 'Lechon','Engorde' => 'Engorde','Reemplazo' => 'Reemplazo'],old('tipo'),['id' => 'tipo','class' => 'form-control']);   !!} 
                @error('tipo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('raza', 'Raza') !!}
                <select name="raza" class="form-control">
                    @foreach ($razas as $raza)
                        <option value="{{$raza->raza}} " @if($porcino->raza == $raza->raza) selected @endif >{{$raza->raza}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento') !!}
                {!! Form::date('fecha_nacimiento',null, ['class'=>'form-control']) !!}
                @error('fecha_nacimiento')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('fecha_entrada', 'Fecha de Entrada') !!}
                {!! Form::date('fecha_entrada',null, ['class'=>'form-control']) !!}
                @error('fecha_entrada')
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
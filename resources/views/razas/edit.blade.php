@extends('adminlte::page')
@section('title', 'Editar Razas')

@section('content_header')
    <h1>Editar Razas</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($raza,['route'=>['razas.update',$raza],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('raza', 'Raza') !!}
                {!! Form::text('raza',null, ['class'=>'form-control', 'placeholder'=>'Digite el la raza']) !!}
                @error('codigo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
          

            {!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
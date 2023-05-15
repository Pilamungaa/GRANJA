@extends('adminlte::page')
@section('title', 'Usuarios')

@section('content_header')
    <h1>Administar Usuarios</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'users.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Digite el nombre']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo') !!}
                {!! Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'Digite email']) !!}
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password',null, ['class'=>'form-control', 'placeholder'=>'Digite el password']) !!}
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
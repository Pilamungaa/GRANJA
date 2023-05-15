@extends('adminlte::page')
@section('title', 'Usuarios')

@section('content_header')
    <h1>Editar Usuarios</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($user,['route'=>['users.update',$user],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Digite el código']) !!}
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo') !!}
                {!! Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'Digite el género']) !!}
                @error('genero')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password',null, ['class'=>'form-control', 'p○laceholder'=>'Digite el tipo']) !!}
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
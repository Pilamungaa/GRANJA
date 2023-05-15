@extends('adminlte::page')
@section('title', 'Usuarios')

@section('content_header')
    <h1>Administar Usuarios</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card-header">
    <a href="{{ route('users.create') }}" class="btn btn-primary">Registro</a>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th colspan="2"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr> 
                    <td>{{$user->id}}</td>
                    <td>{{$user->name }}</td>
                    <td>{{$user->email }}</td>
                    <td width="15px"><a href="{{ route('users.edit',$user) }}" class="btn btn-primary">Editar</a></td>
                    <td width="15px">
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
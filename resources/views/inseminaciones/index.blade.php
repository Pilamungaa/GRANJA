@extends('adminlte::page')
@section('title', 'Inseminaciones')

@section('content_header')
    <h1>Administar Inseminaciónes</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
@if (session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje') }}</strong>
    </div>
    
@endif
    <div class="card-header">
        <a href="{{ route('inseminaciones.create') }}" class="btn btn-primary">Registro</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="dtcrud" class="table table-striped">
                <thead>
                    <tr>
                        <th>Código de la hembra </th>
                        <th>Raza de la hembra</th>
                        <th>Código del macho</th>
                        <th>Raza del macho</th>
                        <th>Fecha de inseminación</th>
                        <th>Observación</th>

                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($inseminacion as $inseminaciones)
                    <tr> 
                        <td>{{$inseminaciones->codigo_hembra}}</td>
                        <td>{{$inseminaciones->raza_hembra }}</td>
                        <td>{{$inseminaciones-> codigo_macho}}</td>
                        <td>{{$inseminaciones->raza_macho }}</td>
                        <td>{{$inseminaciones->fecha_inseminacion }}</td>
                        <td>{{$inseminaciones->observacion }}</td>
                        <td>
                            <form action="{{ route('inseminaciones.destroy', $inseminaciones) }}" method="POST">
                                <a href="{{ route('inseminaciones.edit',$inseminaciones) }}" class="btn btn-primary">Editar</a>
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

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection 
@section('js')
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
          $(document).ready(function () {
            $('#dtcrud').DataTable({
                "language":{
                    "search": "Buscar",
                    "lengthMenu": "Ver _MENU_ registros",
                    "info": "Mostrando página _PAGE_ de  _PAGES_",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente",
                        "first": "Primero",
                        "last": "Último"
                    }
                }
            });
            $('#tabla').DataTable({
    processing: true,
    serverSide: true,
    ajax: '/registros',
    columns: [
        { data: 'id', name: 'id' },
        { data: 'nombre', name: 'nombre' },
        { data: 'created_at', name: 'created_at' }
    ],
    order: [
        [2, 'desc']
    ]
});
        });
    </script>
    
@endsection
@extends('adminlte::page')
@section('title', 'Porcinos')

@section('content_header')
    <h1>Administar Porcinos</h1>
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
        <a href="{{ route('porcinos.create') }}" class="btn btn-primary">Registro</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="dtcrud" class="table table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Género</th>
                        <th>Tipo</th>
                        <th>Raza</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Fecha de Entrada</th>
                        <th>Observación</th>

                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($porcino as $porcinos)
                    <tr> 
                        <td>{{$porcinos->codigo}}</td>
                        <td>{{$porcinos->genero }}</td>
                        <td>{{$porcinos->tipo }}</td>
                        <td>{{$porcinos->raza }}</td>
                        <td>{{$porcinos->fecha_nacimiento }}</td>
                        <td>{{$porcinos->fecha_entrada }}</td>
                        <td>{{$porcinos->observacion }}</td>
                        <td>
                            <form action="{{ route('porcinos.destroy', $porcinos) }}" method="POST">
                                <a href="{{ route('porcinos.edit',$porcinos) }}" class="btn btn-primary">Editar</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.js"></script>
    <script>
          $(document).ready(function () {
            $('#dtcrud').DataTable({
                lengthMenu:[5,10,15,20],
                responsive: "true",
                dom: 'lBfrtip',
             buttons:[
                    {
                    extend: 'excelHtml5',
                    text: '<i class="fa-solid fa-file-csv"></i>',
                    titleAttr: "Exportar a Excel",
                    className: 'btn btn-success',
                    },
                    {
                    extend: 'pdfHtml5',
                    text: '<i class="fa-solid fa-file-csv"></i>',
                    titleAttr: "Exportar a Pdf",
                    className: 'btn btn-danger',
                    },
                    {
                    extend: 'print',
                    text: '<i class="fa-solid fa-file-csv"></i>',
                    titleAttr: "Imprimir",
                    className: 'btn btn-info',
                    },
                ],  
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
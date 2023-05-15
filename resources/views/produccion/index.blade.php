@extends('adminlte::page')
@section('title', 'producción')

@section('content_header')
    <h1>Administar Producción</h1>
@stop
@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$porcinos}}</h3>
                        <p>Porcinos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/porcinos" class="small-box-footer">Ver Más <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$lechon}}</h3>
                        <p>Porcinos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/porcinos" class="small-box-footer">Ver Más <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$reproductora}}</h3>
                        <p>Reproductoras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/porcinos" class="small-box-footer">Ver Más <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$cuarentena}}</h3>
                        <p>En Cuarentena</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('js')
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection
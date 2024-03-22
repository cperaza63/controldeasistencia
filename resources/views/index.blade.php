@extends('layouts.admin')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Asistentes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Página index</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@section('content')
    <div class="row" style="margin:20px;">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $cuantosMinisterios }}</h3>

                <p>Ministerios</p>
            </div>
            <div class="icon">
                <i class="bi bi-building-check"></i>
            </div>
            @can('ministerios.index')
            <a href="{{url('ministerios')}}" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
            @else
            <a href="#" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
            @endcan
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $cuantosMiembros }}<sup style="font-size: 20px"></sup></h3>

                <p>Miembros</p>
            </div>
            <div class="icon">
                <i class="bi bi-person-check"></i>
            </div>
            @can('miembros.index')
            <a href="{{url('miembros')}}" class="small-box-footer"
            >Más info... <i class="fas fa-arrow-circle-right"></i></a>
            @else
            <a href="#" class="small-box-footer"
            >Más info... <i class="fas fa-arrow-circle-right"></i></a>
            @endcan
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $cuantosUsuarios }}</h3>

                <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
                <i class="bi bi-people"></i>
            </div>
            @can('usuarios.index')
            <a href="{{url('usuarios')}}" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
            @else
            <a href="#" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
            @endcan
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $cuantasAsistencias }}</h3>

                <p>Asistencias</p>
            </div>
            <div class="icon">
                <i class="bi bi-calendar2-week"></i>
            </div>
            @can('asistencias.index')
            <a href="{{url('asistencias')}}" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
            @else
            <a href="#" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
            @endcan
            </div>
        </div>
        <!-- ./col -->
        </div>


    <div class="content">
@endsection

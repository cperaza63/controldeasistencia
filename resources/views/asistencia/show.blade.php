@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Asistencias Registradas</h1>
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
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle de la asistencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info btn-sm" href="{{ route('asistencias.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $asistencia->fecha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre del Miembro:</strong>
                            {{ $asistencia->miembro->nombre_apellido }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

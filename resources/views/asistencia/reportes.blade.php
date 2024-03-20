@extends('layouts.admin')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-sm-6 col-sm-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            Reporte de Asistencias
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card-body bg-white">
                                <div class="">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-info">
                                            <a href="{{ url('/asistencias/pdf') }}">
                                            <i class="bi bi-printer"></i>
                                            </a>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Impresión</span>
                                            <span class="info-box-number">Global</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                                <div class="">
                                    <div class="card-body bg-white">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-warning">
                                                <a href="#">
                                                <i class="bi bi-printer"></i>
                                                </a>
                                            </span>
                                            <form action="{{ url('/asistencias/pdf_fechas')}}" method="GET">
                                                <div class="info-box-content">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <span class="info-box-number">Fecha Inicial:</span>
                                                            <input name="fi" type="date" class="form-control">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <span class="info-box-number">Fecha Final:</span>
                                                            <input name="ff" type="date" class="form-control">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <span class="info-box-number">Accion:</span>
                                                            <button class="btn btn-info" type="submit" name="button" value="enviar">Generar reporte</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

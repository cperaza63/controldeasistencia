@extends('layouts.admin')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
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

                    <div class="card-body bg-white">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info">
                                    <a href="{{ url('/asistencias/pdf') }}">
                                    <i class="bi bi-printer"></i>
                                    </a>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Imprimir reporte</span>
                                    <span class="info-box-number">Asistencia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

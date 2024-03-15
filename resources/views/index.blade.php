@extends('layouts.admin')

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
            <a href="{{url('ministerios')}}" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
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
                <i class="bi bi-building-add"></i>
            </div>
            <a href="{{url('miembros')}}" class="small-box-footer"
            >Más info... <i class="fas fa-arrow-circle-right"></i></a>
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
                <i class="bi bi-building-add"></i>
            </div>
            <a href="#" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="bi bi-building-add"></i>
            </div>
            <a href="#" class="small-box-footer">Más info... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        </div>


    <div class="content">
@endsection

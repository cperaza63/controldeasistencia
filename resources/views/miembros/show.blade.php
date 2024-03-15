
@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Miembro: {{$miembro->nombre_apellido}}</h1>
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

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-warning">
                <h5 class="ml-2">Llene los datos</h5>
                <div class="card-body">
                    <form action="{{ url('/miembros') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nombre y Apellidos</label>
                                            <input name="nombre_apellido" value="{{$miembro->nombre_apellido}}" type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Telefono</label>
                                            <input name="telefono" value="{{$miembro->telefono}}" type="number" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">E-mail</label>
                                            <input name="email" type="text" value="{{$miembro->email}}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Género</label>
                                            <select name="genero" id="genero" class="form-control" disabled>
                                                <option value ="MASCULINO"
                                                    {{ $miembro->genero == "MASCULINO" ? 'selected': '' }}>MASCULINO</option>
                                                    <option value ="FEMENINO"
                                                    {{ $miembro->genero == "FEMENINO" ? 'selected': '' }}>FEMENINO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha Nacmiento</label>
                                            <input name="fecha_nacimiento" type="text" class="form-control" value="{{$miembro->fecha_nacimiento}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Ministerio</label>
                                            <input name="ministerio" type="text" class="form-control" value="{{$miembro->ministerio}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección</label>
                                            <input name="direccion" type="text" class="form-control" value="{{$miembro->direccion}}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col 2">
                                <div class="form-group" style="align:center">
                                    <label for="">Fotografía</label><br>
                                    @if ($miembro->fotografia == ""  || $miembro->fotografia == "nophoto.jpg")
                                        @if ($miembro->genero == "MASCULINO")
                                            <img width="120px" name="fotografia"
                                            src="{{ url('images/avatar_hombre.png') }}">
                                        @else
                                            <img width="120px" name="fotografia"
                                            src="{{ url('images/avatar_mujer.png') }}">
                                        @endif
                                    @else
                                        <img width="120px" name="fotografia"
                                        src="{{ asset('storage') . '/' . $miembro->fotografia }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{url('/miembros')}}" class="btn btn-info">Regresar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

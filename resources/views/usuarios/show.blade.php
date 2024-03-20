
@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Usuario: {{ $usuario->name }}</h1>
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
                <h5 class="ml-2">Datos Cargados</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Nombre del Usuario</label>
                                <input name="name" value="{{ $usuario->name }}" type="text" class="form-control" disabled>
                            </div>

                            <div class="form-group">
                                <label for="">Fecha Ingreso</label>
                                <input name="fecha_ingreso" value="{{ $usuario->fecha_ingreso }}" type="date" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Estado</label>
                                <select class="form-control" name="estado" id="estado" disabled>
                                    <option value="1"
                                    {{ $usuario->estado == '1' ? 'selected': '' }}>Activo</option>

                                    <option value="0"
                                    {{ $usuario->estado == '0' ? 'selected': '' }}>Inactivo</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="email" class="form-control" disabled value="{{ trim($usuario->email) }}" />
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{route('usuarios.index')}}" class="btn btn-info">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

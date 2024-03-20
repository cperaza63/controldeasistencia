@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Creación de Usuarios</h1>
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
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <li>{{ $error }}</li>
        </div>
        @endforeach

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline card-primary">
                    <h5 class="ml-2">Llene los datos</h5>
                    <div class="card-body">
                        <form action="{{ url('/usuarios') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre del Usuario</label><b>*</b>
                                        <input name="name" value="{{old('name')}}" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input size="30" name="email" type="email" class="form-control" value="{{ trim(old('email')) }}" />
                                </div>
                                <div class="form-group" style="margin-left: 10px">
                                    <label for="">Password</label>
                                    <input size="20" name="password" type="password" class="form-control" value="{{ trim(old('password')) }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="">Estado</label><b>*</b>
                                    <select class="form-control" name="estado" id="estado">
                                        <option value="1"
                                        {{ old('estado') == '1' ? 'selected': '' }}>Activo</option>

                                        <option value="0"
                                        {{ old('estado') == '0' ? 'selected': '' }}>Inactivo</option>
                                    </select>
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <label for="">Fecha Ingreso</label><b>*</b>
                                    <input name="fecha_ingreso" value="{{old('fecha_ingreso')}}" type="date" class="form-control" required>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-success">Guardar Registro</button>
                                    <a href="{{route('usuarios.index')}}" class="btn btn-info">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Creación de Ministerios</h1>
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
                        <form action="{{ url('/ministerios') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="">Nombre del Ministerio</label><b>*</b>
                                        <input name="nombre_ministerio" value="{{old('nombre_ministerio')}}" type="text" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">descripción</label>
                                        <textarea name="descripcion" cols="30" rows="4" class="form-control">{{ trim(old('descripcion')) }}</textarea>
                                        <script>
                                            CKEDITOR.replace('descripcion');
                                        </script>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Fecha Ingreso</label><b>*</b>
                                        <input name="fecha_ingreso" value="{{old('fecha_ingreso')}}" type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Estado</label><b>*</b>
                                        <select class="form-control" name="estado" id="estado">
                                            <option value="1"
                                            {{ old('estado') == '1' ? 'selected': '' }}>Activo</option>

                                            <option value="0"
                                            {{ old('estado') == '0' ? 'selected': '' }}>Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-success">Guardar Registro</button>
                                    <a href="{{route('miembros.index')}}" class="btn btn-info">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

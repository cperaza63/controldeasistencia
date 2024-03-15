@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edición de Ministerios</h1>
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
                <div class="card card-outline card-success">
                    <h5 class="ml-2">Llene los datos</h5>
                    <div class="card-body">
                        <form action="{{ url('/ministerios', $ministerio->id) }}" method="post">

                            @csrf
                            {{ @method_field("PATCH") }}

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="">Nombre del Ministerio</label><b>*</b>
                                        <input name="nombre_ministerio" value="{{ $ministerio->nombre_ministerio }}" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">descripción</label>
                                        <textarea name="descripcion" cols="30" rows="4" class="form-control" >{{ trim($ministerio->descripcion) }}</textarea>
                                        <script>
                                            CKEDITOR.replace('descripcion');
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fecha Ingreso</label><b>*</b>
                                        <input name="fecha_ingreso" value="{{ $ministerio->fecha_ingreso }}" type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Estado</label><b>*</b>
                                        <select class="form-control" name="estado" id="estado">
                                            <option value="1"
                                            {{ $ministerio->estado == '1' ? 'selected': '' }}>Activo</option>

                                            <option value="0"
                                            {{ $ministerio->estado == '0' ? 'selected': '' }}>Inactivo</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-success">Actualizar Registro</button>
                                    <a href="{{route('ministerios.index')}}" class="btn btn-info">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

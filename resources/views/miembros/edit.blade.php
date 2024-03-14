@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edición de Miembros</h1>
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
                        <form action="{{ url('/miembros', $miembro->id) }}" method="post" enctype="multipart/form-data">

                            @csrf
                            {{ @method_field("PATCH") }}

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Nombre y Apellidos</label><b>*</b>
                                                <input name="nombre_apellido" value="{{$miembro->nombre_apellido}}" type="text" class="form-control" >
                                                <!--@ error('nombre_apellido')
                                                    <small style="color:red;">* Error, campo requerido *</small>
                                                @ enderror-->
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Telefono</label>
                                                <input name="telefono" value="{{$miembro->telefono}}" type="number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">E-mail</label><b>*</b>
                                                <input name="email" value="{{$miembro->email}}" type="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Género</label><b>*</b>
                                                <select class="form-control" name="genero" id="genero">
                                                    @if ($miembro->genero == "MASCULINO")
                                                    <option value="MASCULINO">MASCULINO</option>
                                                    <option value="FEMENINO">FEMENINO</option>
                                                    @else
                                                    <option value="FEMENINO">FEMENINO</option>
                                                    <option value="MASCULINO">MASCULINO</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Fecha Nacmiento</label><b>*</b>
                                                <input name="fecha_nacimiento" value="{{$miembro->fecha_nacimiento}}" type="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Ministerio</label><b>*</b>
                                                <input name="ministerio" value="{{$miembro->ministerio}}" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Dirección</label><b>*</b>
                                                <input name="direccion" value="{{$miembro->direccion}}" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col 3">
                                    <div align="center" class="form-group">
                                        <label for="">Fotografía</label>
                                        <input name="fotografia" type="file" id="file" class="form-control">
                                        <br>
                                        <output id="list" style="text-align:center; border:1ch">
                                            @if ($miembro->fotografia == "" || $miembro->fotografia == "nophoto.jpg")
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
                                        </outout>
                                        <script>
                                            function archivo(evt){
                                                var files = evt.target.files;
                                                //obtenemos la imagen del campo "file".
                                                for (var i=0, f; f = files[i]; i++){
                                                    //solo admitimos imagenes.
                                                    if (!f.type.match('image.*')){
                                                        continue;
                                                    }
                                                    var reader = new FileReader();
                                                    reader.onload = (function (theFile){
                                                        return function (e){
                                                            //insertamos la imagen
                                                            document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result,'"width="50%" title="', escape(theFile.name),'"/>'].join('');
                                                        };
                                                    }) (f);
                                                    reader.readAsDataURL(f);
                                                }
                                            }
                                            document.getElementById('file').addEventListener('change',archivo, false);
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-success">Actualizar Registro</button>
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

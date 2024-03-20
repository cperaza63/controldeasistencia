@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Miembros Registrados</h1>
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

    @if ( $message = Session::get('mensaje') )
    <script>
        Swal.fire({
            title: "Atención",
            text: "{{ $message }}",
            icon: "Exito"
        });
    </script>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ url('/miembros/create')}}" class="btn btn-info"><i class="bi bi-file-plus"></i>
                                Agregar nuevo miembro
                            </a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead>
                            <tr>
                                <th align="center">Nro</th>
                                <th>Miembro</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th style="text-align:center">Estado</th>
                                <th style="text-align:center">Agregado</th>
                                <th style="text-align:center">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $contador = 0; @endphp
                                @foreach ($miembros as $miembro)
                                    <tr>
                                        @php $contador = $contador + 1; @endphp
                                        <td align="center"> {{ $contador }} </td>
                                        <td> {{ $miembro->nombre_apellido }} </td>
                                        <td> {{ $miembro->telefono }} </td>
                                        <td> {{ $miembro->email }} </td>
                                        <td align="center">

                                            @if ( $miembro->estado == 1 )
                                                <button type="button" class="btn btn-outline-success btn-sm"
                                                style="border-radius:10px;">Activo
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-outline-danger btn-sm"
                                                style="border-radius:10px;">Inactivo
                                                </button>
                                            @endif

                                        </td>
                                        <td> {{ $miembro->fecha_ingreso }} </td>
                                        <td style="text-align:center;">
                                            <div class="btn-group" role="group" aria-label="Basic example">

                                                <a href="{{ url('/miembros', $miembro->id) }}" title="show" class="btn btn-outline-info"><i class="bi bi-eye"></i></a>

                                                <a href="{{ route('miembros.edit', $miembro->id) }}" class="btn btn-outline-success"><i class="bi bi-pencil"></i></a>

                                                <form action="{{ url('miembros', $miembro->id) }}" method="post">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                    onclick="return confirm('Estas seguro de eliminar registro?')" class="btn btn-outline-danger">
                                                    <i class="bi bi-trash"></i></button>
                                                </form>

                                              </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tfoot>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

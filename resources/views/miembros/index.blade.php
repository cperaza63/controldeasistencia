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

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead>
                            <tr>
                                <th align="center">Nro</th>
                                <th>Miembro</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Estado</th>
                                <th>Agregado</th>
                                <th>Acciones</th>
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
                                        <td> {{ $miembro->estado }} </td>
                                        <td> {{ $miembro->fecha_ingreso }} </td>
                                        <td>  </td>
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

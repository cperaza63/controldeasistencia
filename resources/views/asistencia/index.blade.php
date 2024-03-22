@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Asistencias Registradas</h1>
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">

                            </span>
                            @can("asistencias.create")
                             <div class="float-right">
                                <a href="{{ route('asistencias.create') }}" class="btn btn-info btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva Asistencia') }}
                                </a>
                              </div>
                            @endcan
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Fecha</th>
										<th>Nombre del Miembro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asistencias as $asistencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $asistencia->fecha }}</td>
											<td>{{ $asistencia->miembro->nombre_apellido }}</td>

                                            <td>
                                                <form action="{{ route('asistencias.destroy',$asistencia->id) }}" method="POST">
                                                    <a class="btn btn-outline-primary" href="{{ route('asistencias.show',$asistencia->id) }}"><i class="bi bi-eye"></i></i> </a>
                                                @can("asistencias.edit")
                                                    <a class="btn btn-outline-success" href="{{ route('asistencias.edit',$asistencia->id) }}"><i class="bi bi-pencil"></i> </a>
                                                @endcan
                                                @csrf
                                                @method('DELETE')
                                                    @can("asistencias.edit")
                                                    <button onclick="return confirm('Estas seguro de eliminar registro?')" type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i> </button>
                                                @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asistencias->links() !!}
            </div>
        </div>
    </div>
@endsection

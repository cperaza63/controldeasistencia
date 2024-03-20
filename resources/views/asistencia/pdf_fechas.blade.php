<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Asistencias por fecha</title>
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
</head>
<body>
    <h1>Reporte de Asistencias <h5>Fechas {{$fi . " - " . $ff}}</h1>
    <div class="col-sm-12">
        <table id="example1" class="table table-bordered table-striped table-sm"">
            <thead class="thead">
                <tr>
                    <th>No</th>
                    <th>Fecha</th>
                    <th>Nombre del Miembro</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0; @endphp
                @foreach ($asistencias as $asistencia)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $asistencia->fecha }}</td>
                        <td>{{ $asistencia->miembro->nombre_apellido }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <strong>Total Asistentes: {{$i}}</strong>
    </div>
</body>
</html>

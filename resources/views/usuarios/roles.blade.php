@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Roles del Usuario - {{ $user->name}}</h1>
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-success">
                <h5 class="ml-2">Escoja el rol del usuario</h5>
                <div class="card-body">

                    {!! Form::model( $user, ['route'=>['usuarios.update_roles', $user], 'method' => 'PUT'] ) !!}
                    @foreach ($roles as $rol)
                        <div>
                            <label>
                                {!! Form::checkbox( 'roles[]', $rol->id, null, [ 'class' => 'mr-1'] ) !!}
                                {{ $rol->name }}
                            </label>
                        </div>
                    @endforeach

                    {!! Form::submit('Asignar rol', [ 'class' => 'btn btn-primary mt-2' ]) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

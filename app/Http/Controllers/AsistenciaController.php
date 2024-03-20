<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Miembro;
use App\Http\Requests\AsistenciaRequest;
use PDF;

use function Laravel\Prompts\select;

/**
 * Class AsistenciaController
 * @package App\Http\Controllers
 */
class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencias = Asistencia::paginate();
        return view('asistencia.index', compact('asistencias'))
            ->with('i', (request()->input('page', 1) - 1) * $asistencias->perPage());
    }

    public function reportes()
    {
        $asistencias = Asistencia::all();
        $miembros = Miembro::pluck('nombre_apellido','id');
        return view('asistencia.reportes', compact('asistencias','miembros'));
    }

    public function pdf(){
        $asistencias = Asistencia::all();
        $miembros = Miembro::pluck('nombre_apellido','id');
        //return view('asistencia.pdf', compact('asistencias','miembros'));

        $pdf = PDF::loadView('asistencia.pdf', compact('asistencias','miembros'));
        // DOWNLOAD POR stream
        return $pdf->stream('asistencia.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asistencia = new Asistencia();
        $miembros = Miembro::pluck('nombre_apellido','id');
        return view('asistencia.create', compact('asistencia','miembros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsistenciaRequest $request)
    {
        Asistencia::create($request->validated());

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia creada con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);

        return view('asistencia.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $asistencia = Asistencia::find($id);
        $miembros = Miembro::pluck('nombre_apellido','id');
        return view('asistencia.edit', compact('asistencia', 'miembros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsistenciaRequest $request, Asistencia $asistencia)
    {
        $asistencia->update($request->validated());

        return redirect()->route('asistencias.index')
            ->with('success', 'Actualización de asistencia con éxito');
    }

    public function destroy($id)
    {
        Asistencia::find($id)->delete();

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia eliminada con éxito');
    }
}

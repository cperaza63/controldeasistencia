<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Miembro;
use App\Models\Ministerio;
use App\Models\Asistencia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuantosMinisterios=0;
        $cuantosMiembros =0;
        $cuantosUsuarios =0;
        $cuantasAsistencias =0;

        $cuantosMinisterios = Ministerio::count();
        $cuantosMiembros = Miembro::count();
        $cuantosUsuarios = User::count();
        $cuantasAsistencias = Asistencia::count();

       //return response()->json($cuantosMinisterios);

        return view('index', [
            'cuantosMinisterios' => $cuantosMinisterios,
            'cuantosMiembros' => $cuantosMiembros,
            'cuantosUsuarios' => $cuantosUsuarios,
            'cuantasAsistencias' => $cuantasAsistencias,]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

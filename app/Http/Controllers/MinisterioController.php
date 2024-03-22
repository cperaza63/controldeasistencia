<?php

namespace App\Http\Controllers;

use App\Models\Ministerio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class MinisterioController extends Controller
{
    public function __construct(){
        $this->middleware('can:ministerios.index')->only('index');
        $this->middleware('can:ministerios.create')->only('create', 'store');
        $this->middleware('can:ministerios.edit')->only('edit', 'update');
        $this->middleware('can:ministerios.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ministerios = Ministerio::all()->sortByDesc('id');
        return view('ministerios.index', ['ministerios'=>$ministerios]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ministerios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);

       $request->validate([
        'nombre_ministerio' => 'required',
        'fecha_ingreso' => 'required'
       ]);

       $ministerio= new ministerio();

       $ministerio->nombre_ministerio = $request->nombre_ministerio;
       $ministerio->descripcion = $request->descripcion;
       $ministerio->fecha_ingreso = date($format = 'Y-m-d');
       $ministerio->estado = $request->estado;

       $ministerio->save();

       return redirect()->route('ministerios.index')->with('mensaje', 'Ministerio Se registro de manera correcta');
    }

    /**
     * Display the specified resource.
     */
    public function show ($id)
    {
        $ministerio = Ministerio::findOrFail($id);

        return view('ministerios.show', [ 'ministerio' => $ministerio ]);
        //return response()->json($ministerio);
        //echo $ministerio->email;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ministerio = Ministerio::findOrFail($id);
       //return response()->json($ministerio);
        return view('ministerios.edit', [ 'ministerio' => $ministerio ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //$datos = request()->all();
        //return response()->json($datos);

       $request->validate([
        'nombre_ministerio' => 'required',
        'descripcion' => 'required',
        'fecha_ingreso' => 'required'
       ]);

       $ministerio = Ministerio::findOrFail($id);

       $ministerio->nombre_ministerio = $request->nombre_ministerio;
       $ministerio->descripcion = $request->descripcion;
       $ministerio->fecha_ingreso = date($format = 'Y-m-d');
       $ministerio->estado = $request->estado;

       $ministerio->save();

       return redirect()->route('ministerios.index')->with('mensaje', 'Ministerio Se actualizó de manera correcta');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Ministerio::destroy($id);
        return redirect()->route('ministerios.index')->with('mensaje', 'Se eliminó de manera correcta');
    }
}

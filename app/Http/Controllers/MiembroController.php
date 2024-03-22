<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class MiembroController extends Controller
{
    public function __construct(){
        $this->middleware('can:miembros.index')->only('index');
        $this->middleware('can:miembros.create')->only('create', 'store');
        $this->middleware('can:miembros.edit')->only('edit', 'update');
        $this->middleware('can:miembros.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $miembros = Miembro::all()->sortByDesc('id');
        return view('miembros.index', ['miembros'=>$miembros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('miembros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $datos = request()->all();
       // return response()->json($datos);

       $request->validate([
        'nombre_apellido' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'fecha_nacimiento' => 'required',
        'email' => 'required|unique:miembros',
        'ministerio' => 'required',
       ]);

       $miembro= new Miembro();

       $miembro->nombre_apellido = $request->nombre_apellido;
       $miembro->fecha_nacimiento = $request->fecha_nacimiento;
       $miembro->direccion = $request->direccion;
       $miembro->email = $request->email;
       $miembro->telefono = $request->telefono;
       $miembro->genero = $request->genero;
       $miembro->ministerio = $request->ministerio;
       //$miembro->fotografia = $request->fotografia;
       $miembro->fecha_ingreso = date($format = 'Y-m-d');
       $miembro->estado = '1';

       if($request->hasFile('fotografia')){
            $miembro->fotografia = $request->file('fotografia')->store('fotografias_miembros', 'public');
       }

       $miembro->save();

       return redirect()->route('miembros.index')->with('mensaje', 'Se registro de manera correcta');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $miembro = Miembro::findOrFail($id);

        return view('miembros.show', [ 'miembro' => $miembro ]);
        //return response()->json($miembro);
        //echo $miembro->email;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $miembro = Miembro::findOrFail($id);
       //return response()->json($miembro);
        return view('miembros.edit', [ 'miembro' => $miembro ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $datos = request()->all();
       // return response()->json($datos);

       $request->validate([
        'nombre_apellido' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'fecha_nacimiento' => 'required',
        'email' => 'required',
        'ministerio' => 'required',
       ]);

       $miembro = Miembro::findOrFail($id);

       $miembro->nombre_apellido = $request->nombre_apellido;
       $miembro->fecha_nacimiento = $request->fecha_nacimiento;
       $miembro->direccion = $request->direccion;
       $miembro->email = $request->email;
       $miembro->telefono = $request->telefono;
       $miembro->genero = $request->genero;
       $miembro->ministerio = $request->ministerio;

       if($request->hasFile('fotografia')){
            Storage::delete('public/' . $miembro->fotografia);
            $miembro->fotografia = $request->file('fotografia')->store('fotografias_miembros', 'public');
       }

       $miembro->save();

       return redirect()->route('miembros.index')->with('mensaje', 'Se registro de manera correcta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $miembro = Miembro::findOrFail($id);
        Storage::delete('public/' . $miembro->fotografia);
        Miembro::destroy($id);
        return redirect()->route('miembros.index')->with('mensaje', 'Se eliminó de manera correcta');
    }
}

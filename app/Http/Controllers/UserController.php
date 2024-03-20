<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all()->sortByDesc('id');
        return view('usuarios.index', ['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);

       $request->validate([
        'name' => 'required',
        'email' => 'required',
        'fecha_ingreso' => 'required'
       ]);

       $usuario= new User();

       $usuario->name = $request->name;
       $usuario->email = $request->email;
       $usuario->fecha_ingreso = date($format = 'Y-m-d');
       $usuario->estado = $request->estado;

       if (!is_null( $request->password) || $request->password != "" ) {
        $usuario->password = Hash::make($request->password);
        }

       $usuario->save();

       return redirect()->route('usuarios.index')->with('mensaje', 'Usuario se registro de manera correcta');
    }

    /**
     * Display the specified resource.
     */
    public function show ($id)
    {
        $usuario = User::findOrFail($id);

        return view('usuarios.show', [ 'usuario' => $usuario ]);
        //return response()->json($usuario);
        //echo $usuario->email;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
       //return response()->json($usuario);
        return view('usuarios.edit', [ 'usuario' => $usuario ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //$datos = request()->all();
        //return response()->json($datos);

       $request->validate([
        'name' => 'required',
        'email' => 'required',
        'fecha_ingreso' => 'required'
       ]);

       $usuario = User::findOrFail($id);

       $usuario->name = $request->name;
       $usuario->email = $request->email;
       $usuario->fecha_ingreso = date($format = 'Y-m-d');
       $usuario->estado = $request->estado;

       if (!is_null( $request->password) || $request->password != "" ) {
        $usuario->password = Hash::make($request->password);
        }
       $usuario->save();
       return redirect()->route('usuarios.index')->with('mensaje', 'usuario Se actualizó de manera correcta');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('usuarios.index')->with('mensaje', 'Se eliminó de manera correcta');
    }
}

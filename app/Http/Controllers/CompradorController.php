<?php

namespace App\Http\Controllers;

use App\Models\Comprador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compradores = Comprador::all();
        return view('listado',compact('compradores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createComprador');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_completo' => 'required',
            'nombre_usuario' => 'required',
            'contrasena' => 'required',
        ]);

        // Crear una nueva instancia de Comprador
        $comprador = new Comprador;

        // Asignar los datos del formulario a las propiedades del comprador
        $comprador->nombre_completo = $request->nombre_completo;
        $comprador->nombre_usuario = $request->nombre_usuario;
        $comprador->contrasena = Hash::make($request->contrasena); // Asegúrate de encriptar la contraseña

        // Guardar el comprador en la base de datos
        $comprador->save();

        // Redirigir al usuario de nuevo al formulario
        return redirect()->route('comprador.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comprador $comprador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comprador $comprador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comprador $comprador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comprador $comprador)
    {
        //
    }
}

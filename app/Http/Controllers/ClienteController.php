<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->nombre = $request->input('nombre');
        $clientes->apellido = $request->input('apellido');
        $clientes->correo = $request->input('correo');
        $clientes->telefono = $request->input('telefono');

        $clientes->save();

        return redirect()->back();
    }
    
    public function update(Request $request, $id)
    {
        $clientes=Cliente::find($id);
        $clientes->nombre = $request->input('nombre');
        $clientes->apellido = $request->input('apellido');
        $clientes->correo = $request->input('correo');
        $clientes->telefono = $request->input('telefono');

        $clientes->update();

        return redirect()->back();
        
    }

    public function destroy($id)
    {
        
        $clientes=Cliente::find($id);
        $clientes->delete();

        return redirect()->back();
    }
}

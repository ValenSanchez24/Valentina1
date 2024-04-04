<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        // Obtenga todos los pedidos
        $pedidos = Pedido::all();
        $clientes = Cliente::all();
        // Devuelva los pedidos
        return view('pedido.index', compact('pedidos', 'clientes'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        // Crear nueva instancia de Pedido
        $pedidos = new Pedido();

        // Establecer los datos del pedido
        $pedidos->cliente_id = $request->input('cliente_id');
        $pedidos->platillo = $request->input('platillo');
        $pedidos->descripcion = $request->input('descripcion');
        $pedidos->mesero = $request->input('mesero');

        // Guardar el pedido
        $pedidos->save();

        // Redirigir al usuario
        return redirect()->back();
    }

    public function update(Request $request, Pedido $pedidos, $id)
    {
        $pedido = Pedido::find($id);
    
        // Verifica si el cliente existe en la tabla de clientes
        $cliente = Cliente::find($request->input('cliente_id'));
        if (is_null($cliente)) {
            // Si no existe, devuelve un error
            return redirect()->back()->withErrors(['cliente_id' => 'El cliente seleccionado no existe']);
        }
    
        // Actualiza el pedido
        $pedido->cliente_id = $request->input('cliente_id');
        $pedido->platillo = $request->input('platillo');
        $pedido->descripcion = $request->input('descripcion');
        $pedido->mesero = $request->input('mesero');
    
        $pedido->save();
    
        return redirect()->back();
    }
    

    public function destroy(Pedido $pedidos)
    {
        $pedidos->delete();

        return redirect()->back();
    }
}

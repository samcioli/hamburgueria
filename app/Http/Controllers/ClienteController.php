<?php
namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Retorna a lista de todos os clientes
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function create()
    {
        // Retorna a view de cadastro de um novo cliente
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        // Validação e criação de um novo cliente
        $request->validate([
            'status' => 'required|integer',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index');
    }

    public function edit($id)
    {
        // Encontra o cliente pelo ID
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(Request $request, $id)
    {
        // Validação e atualização do cliente
        $request->validate([
            'status' => 'required|integer',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        // Exclui o cliente pelo ID
        Cliente::destroy($id);
        return redirect()->route('clientes.index');
    }
}

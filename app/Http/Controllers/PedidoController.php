<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido; // Certifique-se de que o modelo Pedido está sendo importado

class PedidoController extends Controller
{
    // Método para exibir todos os pedidos
// Exibir todos os pedidos
public function index()
{
    // Recuperar todos os pedidos da tabela 'pedidos'
    $pedidos = Pedido::all(); 

    // Retornar os pedidos como JSON
    return response()->json($pedidos);
}

    // Exibir formulário de criação
    public function create()
    {
        return view('pedidos.create'); // Retorna o formulário de criação de pedidos
    }

    // Salvar um novo pedido
    public function store(Request $request)
    {
        $request->validate([
            'horario' => 'required|date', // Validação para o campo 'horario'
            'total' => 'required|numeric|min:0', // Validação para o campo 'total'
        ]);

        Pedido::create($request->all()); // Cria um novo pedido com os dados do formulário

        return redirect()->route('pedidos.index')->with('success', 'Pedido criado com sucesso!');
    }

    // Exibir formulário de edição
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id); // Encontra o pedido pelo ID, ou lança erro se não encontrado
        return view('pedidos.edit', compact('pedido')); // Retorna o formulário de edição com os dados do pedido
    }

    // Atualizar um pedido
    public function update(Request $request, $id)
    {
        $request->validate([
            'horario' => 'required|date', // Validação para o campo 'horario'
            'total' => 'required|numeric|min:0', // Validação para o campo 'total'
        ]);

        $pedido = Pedido::findOrFail($id); // Encontra o pedido pelo ID, ou lança erro se não encontrado
        $pedido->update($request->all()); // Atualiza os dados do pedido

        return redirect()->route('pedidos.index')->with('success', 'Pedido atualizado com sucesso!');
    }

    // Deletar um pedido
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id); // Encontra o pedido pelo ID, ou lança erro se não encontrado
        $pedido->delete(); // Deleta o pedido

        return redirect()->route('pedidos.index')->with('success', 'Pedido excluído com sucesso!');
    }
}

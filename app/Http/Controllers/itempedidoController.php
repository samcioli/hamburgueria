<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemPedido;  // Aqui você deve importar o modelo correto, ItemPedido

class ItemPedidoController extends Controller
{
    // Exibir todos os itens de pedido
    public function index()
    {
        $itensPedidos = ItemPedido::all(); // Altere para ItemPedido
        return view('itensPedidos.index', compact('itensPedidos'));
    }

    // Exibir formulário de criação
    public function create()
    {
        return view('itensPedidos.create');
    }

    // Salvar um novo item de pedido
    public function store(Request $request)
    {
        $request->validate([
            'valorunitario' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:1',
            'subtotal' => 'required|numeric|min:0',
            'observacoes' => 'nullable|string',
            'status' => 'required|integer|in:0,1,2', // status como um inteiro (exemplo de valores possíveis)
        ]);

        ItemPedido::create($request->all());

        return redirect()->route('itensPedidos.index')->with('success', 'Item de Pedido criado com sucesso!');
    }

    // Exibir formulário de edição
    public function edit($id)
    {
        $itemPedido = ItemPedido::findOrFail($id);
        return view('itensPedidos.edit', compact('itemPedido'));
    }

    // Atualizar um item de pedido
    public function update(Request $request, $id)
    {
        $request->validate([
            'valorunitario' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:1',
            'subtotal' => 'required|numeric|min:0',
            'observacoes' => 'nullable|string',
            'status' => 'required|integer|in:0,1,2', // status como um inteiro (exemplo de valores possíveis)
        ]);

        $itemPedido = ItemPedido::findOrFail($id);
        $itemPedido->update($request->all());

        return redirect()->route('itensPedidos.index')->with('success', 'Item de Pedido atualizado com sucesso!');
    }

    // Deletar um item de pedido
    public function destroy($id)
    {
        $itemPedido = ItemPedido::findOrFail($id);
        $itemPedido->delete();

        return redirect()->route('itensPedidos.index')->with('success', 'Item de Pedido excluído com sucesso!');
    }
}

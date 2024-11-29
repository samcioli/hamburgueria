<?php
namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        // Recupera todos os pedidos
        $pedidos = Pedido::all();
        return view('pedidos.index', ['pedidos' => $pedidos]);
    }

    public function create()
    {
        // Recupera os produtos para permitir o cadastro do pedido
        $produtos = Produto::all();
        return view('pedidos.create', ['produtos' => $produtos]); // Retorna a view para criar um novo pedido
    }

    public function store(Request $request)
    {
        // Validação para garantir que todos os campos obrigatórios estão preenchidos
        $request->validate([
            'pedido_id' => 'required|integer',
            'produto_id' => 'required|integer|exists:produtos,id', // O produto precisa existir no banco
            'quantidade' => 'required|integer|min:1',
            'preco_unitario' => 'required|numeric|min:0.01',
        ]);

        // Cria o pedido no banco de dados
        Pedido::create([
            'pedido_id' => $request->pedido_id,
            'produto_id' => $request->produto_id,
            'quantidade' => $request->quantidade,
            'preco_unitario' => $request->preco_unitario,
        ]);

        return redirect()->route('pedidos.index'); // Redireciona para a lista de pedidos
    }

    public function edit($id)
    {
        // Recupera o pedido pelo ID
        $pedido = Pedido::findOrFail($id);
        $produtos = Produto::all(); // Para poder editar o produto do pedido
        return view('pedidos.edit', ['pedido' => $pedido, 'produtos' => $produtos]);
    }

    public function update(Request $request, $id)
    {
        // Validação
        $request->validate([
            'pedido_id' => 'required|integer',
            'produto_id' => 'required|integer|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'preco_unitario' => 'required|numeric|min:0.01',
        ]);

        // Recupera o pedido
        $pedido = Pedido::findOrFail($id);
        $pedido->update([
            'pedido_id' => $request->pedido_id,
            'produto_id' => $request->produto_id,
            'quantidade' => $request->quantidade,
            'preco_unitario' => $request->preco_unitario,
        ]);

        return redirect()->route('pedidos.index'); // Redireciona para a lista de pedidos
    }

    public function destroy($id)
    {
        // Deleta o pedido
        Pedido::findOrFail($id)->delete();
        return redirect()->route('pedidos.index'); // Redireciona para a lista de pedidos
    }
}
?>
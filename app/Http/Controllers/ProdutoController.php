<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all(); // Recupera todos os produtos
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create'); // Retorna a view para cadastrar um novo produto
    }

    public function store(Request $request)
    {
        // Validação para garantir que todos os campos obrigatórios estão preenchidos
        $request->validate([
            'descricao' => 'required|string|max:255',
            'foto' => 'required|string|max:255',  // Pode ser uma URL ou caminho para a imagem
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
            'tipo' => 'required|integer',
        ]);

        Produto::create($request->all()); // Cria o produto no banco
        return redirect()->route('produtos.index');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id); // Recupera o produto pelo ID
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        // Validação
        $request->validate([
            'descricao' => 'required|string|max:255',
            'foto' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
            'tipo' => 'required|integer',
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($request->all()); // Atualiza o produto no banco
        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete(); // Deleta o produto
        return redirect()->route('produtos.index');
    }
}

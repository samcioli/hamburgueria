<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    // Exibir todas as pessoas
    public function index()
    {
        $pessoas = Pessoa::all();
        return response()->json($pessoas);
    }

    // Exibir uma pessoa específica
    public function show($id)
    {
        $pessoa = Pessoa::find($id);

        if (!$pessoa) {
            return response()->json(['error' => 'Pessoa não encontrada'], 404);
        }

        return response()->json($pessoa);
    }

    // Criar uma nova pessoa
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:pessoas,email|max:255',
        ]);

        $pessoa = Pessoa::create([
            'nome' => $request->nome,
            'email' => $request->email,
        ]);

        return response()->json(['message' => 'Pessoa criada com sucesso', 'data' => $pessoa], 201);
    }

    // Atualizar uma pessoa existente
    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);

        if (!$pessoa) {
            return response()->json(['error' => 'Pessoa não encontrada'], 404);
        }

        $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:pessoas,email,' . $id . '|max:255',
        ]);

        $pessoa->update($request->only(['nome', 'email']));

        return response()->json(['message' => 'Pessoa atualizada com sucesso', 'data' => $pessoa]);
    }

    // Deletar uma pessoa
    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);

        if (!$pessoa) {
            return response()->json(['error' => 'Pessoa não encontrada'], 404);
        }

        $pessoa->delete();

        return response()->json(['message' => 'Pessoa excluída com sucesso']);
    }
    public function create()
{
    return view('pessoas.create'); // Certifique-se de que a view está no local correto (resources/views/pessoas/create.blade.php)
}

}

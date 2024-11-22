<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all(); // Recupera todos os funcionários
        return view('funcionarios.index', ['funcionarios' => $funcionarios]);
    }

    public function create()
    {
        return view('funcionarios.create'); // Retorna a view para cadastrar um novo funcionário
    }

    public function store(Request $request)
    {
        Funcionario::create($request->all()); // Cria o funcionário no banco
        return redirect()->route('funcionarios.index');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id); // Recupera o funcionário pelo ID
        return view('funcionarios.edit', ['funcionario' => $funcionario]);
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all()); // Atualiza o funcionário no banco
        return redirect()->route('funcionarios.index');
    }

    public function destroy($id)
    {
        Funcionario::findOrFail($id)->delete(); // Deleta o funcionário
        return redirect()->route('funcionarios.index');
    }
}

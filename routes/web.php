<?php
namespace app\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ItemPedidoController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome'); });

Route::get('pessoas', [PessoaController::class, 'index'])->name('pessoas.index'); // Listar todas as pessoas
Route::get('pessoas/create', [PessoaController::class, 'create'])->name('pessoas.create'); // Formulário para criar uma pessoa
Route::post('pessoas', [PessoaController::class, 'store'])->name('pessoas.store'); // Salvar nova pessoa
Route::get('pessoas/{id}', [PessoaController::class, 'show'])->name('pessoas.show'); // Exibir uma pessoa específica
Route::get('pessoas/{id}/edit', [PessoaController::class, 'edit'])->name('pessoas.edit'); // Formulário para editar uma pessoa
Route::put('pessoas/{id}', [PessoaController::class, 'update'])->name('pessoas.update'); // Atualizar uma pessoa
Route::delete('pessoas/{id}', [PessoaController::class, 'destroy'])->name('pessoas.destroy'); // Deletar uma pessoa

Route::resource('pedidos', PedidoController::class);

    
Route::get('/pagamentos', [PagamentoController::class, 'index'])->name('pagamentos-index');
Route::get('/pagamentos/create', [PagamentoController::class, 'create'])->name('pagamentos-create');
Route::post('/pagamentos', [PagamentoController::class, 'store'])->name('pagamentos-store');
Route::get('/pagamentos/{id}/edit', [PagamentoController::class, 'edit'])->name('pagamentos-edit');
Route::put('/pagamentos/{id}', [PagamentoController::class, 'update'])->name('pagamentos-update');
Route::delete('/pagamentos/{id}', [PagamentoController::class, 'destroy'])->name('pagamentos-destroy');

Route::resource('itempedidos', ItemPedidoController::class);

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios-index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios-create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios-store');
Route::get('/usuarios/{id}/edit',[UsuarioController::class, 'edit'])->name('usuarios-edit');
Route::put('/usuarios/{id}',[UsuarioController::class, 'update'])->name('usuarios-update');
Route::delete('/usuarios/{id}',[UsuarioController::class, 'destroy'])->name('usuarios-destroy');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionarios/{id}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');

/*
Route::get('/user/{id}', function ($id) {
    return view('usuario',['id' => $id]);
});
Route::get('/usuario', function () {
    $numero = 1;
    return view('usuario',['numero' => $numero]);
});
Route::get('/', function () {
    $nome = "Admin";
    $codigo = 12;
    $lanches = ["X-Salada","X-Bacon","X-Tudo"];
    return view('welcome',[
        'nome' => $nome,
        'codigo' => $codigo,
        'lanches' => $lanches]);
});
*/
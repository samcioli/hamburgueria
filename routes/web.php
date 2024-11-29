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

Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas-index');
Route::get('/pessoas/create', [PessoaController::class, 'create'])->name('pessoas-create');
Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas-store');
Route::get('/pessoas/{id}/edit', [PessoaController::class, 'edit'])->name('pessoas-edit');
Route::put('/pessoas/{id}', [PessoaController::class, 'update'])->name('pessoas-update');
Route::delete('/pessoas/{id}', [PessoaController::class, 'destroy'])->name('pessoas-destroy');

Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos-index');
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos-create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos-store');
Route::get('/pedidos/{id}/edit', [PedidoController::class, 'edit'])->name('pedidos-edit');
Route::put('/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos-update');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos-destroy');

Route::get('/pagamentos', [PagamentoController::class, 'index'])->name('pagamentos-index');
Route::get('/pagamentos/create', [PagamentoController::class, 'create'])->name('pagamentos-create');
Route::post('/pagamentos', [PagamentoController::class, 'store'])->name('pagamentos-store');
Route::get('/pagamentos/{id}/edit', [PagamentoController::class, 'edit'])->name('pagamentos-edit');
Route::put('/pagamentos/{id}', [PagamentoController::class, 'update'])->name('pagamentos-update');
Route::delete('/pagamentos/{id}', [PagamentoController::class, 'destroy'])->name('pagamentos-destroy');

Route::get('/itenspedido', [ItemPedidoController::class, 'index'])->name('itenspedido-index');
Route::get('/itenspedido/create', [ItemPedidoController::class, 'create'])->name('itenspedido-create');
Route::post('/itenspedido', [ItemPedidoController::class, 'store'])->name('itenspedido-store');
Route::get('/itenspedido/{id}/edit', [ItemPedidoController::class, 'edit'])->name('itenspedido-edit');
Route::put('/itenspedido/{id}', [ItemPedidoController::class, 'update'])->name('itenspedido-update');
Route::delete('/itenspedido/{id}', [ItemPedidoController::class, 'destroy'])->name('itenspedido-destroy');

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
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Pedido</title>
</head>
<body>
    <h1>Editar Pedido</h1>

    <form action="{{ route('pedidos.update', ['id' => $pedido->idpedido]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>ID da Pessoa: </label>
        <input type="number" name="pessoa_id" value="{{ $pedido->pessoa_id }}" required>
        <br><br>

        <label>Status: </label>
        <input type="text" name="status" value="{{ $pedido->status }}" required>
        <br><br>

        <label>Data do Pedido: </label>
        <input type="date" name="data_pedido" value="{{ $pedido->data_pedido }}" required>
        <br><br>

        <label>Total: </label>
        <input type="number" name="total" step="0.01" value="{{ $pedido->total }}" required>
        <br><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

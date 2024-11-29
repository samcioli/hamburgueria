<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Item do Pedido</title>
</head>
<body>
    <h1>Editar Item do Pedido</h1>

    <form action="{{ route('itenspedido.update', ['id' => $itemPedido->iditem_pedido]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>ID do Pedido: </label>
        <input type="number" name="pedido_id" value="{{ $itemPedido->pedido_id }}" required>
        <br><br>

        <label>ID do Produto: </label>
        <input type="number" name="produto_id" value="{{ $itemPedido->produto_id }}" required>
        <br><br>

        <label>Quantidade: </label>
        <input type="number" name="quantidade" value="{{ $itemPedido->quantidade }}" required>
        <br><br>

        <label>Preço Unitário: </label>
        <input type="number" name="preco_unitario" step="0.01" value="{{ $itemPedido->preco_unitario }}" required>
        <br><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

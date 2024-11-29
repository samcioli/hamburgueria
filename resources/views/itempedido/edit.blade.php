<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Item de Pedido</title>
</head>
<body>
    <h1>Editar Item de Pedido</h1>
    <form action="{{ route('itempedidos.update', $itemPedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="valorunitario">Valor Unitário:</label>
            <input type="text" name="valorunitario" id="valorunitario" value="{{ $itemPedido->valorunitario }}" required>
        </div>
        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" value="{{ $itemPedido->quantidade }}" required>
        </div>
        <div>
            <label for="subtotal">Subtotal:</label>
            <input type="text" name="subtotal" id="subtotal" value="{{ $itemPedido->subtotal }}" required>
        </div>
        <div>
            <label for="observacoes">Observações:</label>
            <textarea name="observacoes" id="observacoes">{{ $itemPedido->observacoes }}</textarea>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="number" name="status" id="status" value="{{ $itemPedido->status }}" required>
        </div>
        <div>
            <button type="submit">Atualizar Item</button>
        </div>
    </form>
</body>
</html>

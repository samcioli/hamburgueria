<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Item de Pedido</title>
</head>
<body>
    <h1>Criar Item de Pedido</h1>
    <form action="{{ route('itempedidos.store') }}" method="POST">
        @csrf
        <div>
            <label for="valorunitario">Valor Unitário:</label>
            <input type="text" name="valorunitario" id="valorunitario" required>
        </div>
        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required>
        </div>
        <div>
            <label for="subtotal">Subtotal:</label>
            <input type="text" name="subtotal" id="subtotal" required>
        </div>
        <div>
            <label for="observacoes">Observações:</label>
            <textarea name="observacoes" id="observacoes"></textarea>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="number" name="status" id="status" required>
        </div>
        <div>
            <button type="submit">Criar Item</button>
        </div>
    </form>
</body>
</html>

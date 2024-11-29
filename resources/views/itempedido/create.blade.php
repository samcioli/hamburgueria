<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Item do Pedido</title>
</head>
<body>
    <h1>Cadastro de Item do Pedido</h1>

    <form action="{{ route('itenspedido.store') }}" method="POST">
        @csrf
        <label>ID do Pedido: </label>
        <input type="number" name="pedido_id" placeholder="Digite o ID do pedido" required>
        <br><br>

        <label>ID do Produto: </label>
        <input type="number" name="produto_id" placeholder="Digite o ID do produto" required>
        <br><br>

        <label>Quantidade: </label>
        <input type="number" name="quantidade" placeholder="Digite a quantidade" required>
        <br><br>

        <label>Preço Unitário: </label>
        <input type="number" name="preco_unitario" step="0.01" placeholder="Digite o preço unitário" required>
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

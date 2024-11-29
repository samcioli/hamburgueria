<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pedido</title>
</head>
<body>
    <h1>Cadastro de Pedido</h1>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <label>ID da Pessoa: </label>
        <input type="number" name="pessoa_id" placeholder="Digite o ID da pessoa" required>
        <br><br>

        <label>Status: </label>
        <input type="text" name="status" placeholder="Digite o status do pedido" required>
        <br><br>

        <label>Data do Pedido: </label>
        <input type="date" name="data_pedido" required>
        <br><br>

        <label>Total: </label>
        <input type="number" name="total" step="0.01" placeholder="Digite o total do pedido" required>
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

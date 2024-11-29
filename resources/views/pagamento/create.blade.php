<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pagamento</title>
</head>
<body>
    <h1>Cadastro de Pagamento</h1>

    <form action="{{ route('pagamentos.store') }}" method="POST">
        @csrf
        <label>ID do Pedido: </label>
        <input type="number" name="pedido_id" placeholder="Digite o ID do pedido" required>
        <br><br>

        <label>Valor Pago: </label>
        <input type="number" name="valor_pago" step="0.01" placeholder="Digite o valor pago" required>
        <br><br>

        <label>Data de Pagamento: </label>
        <input type="date" name="data_pagamento" required>
        <br><br>

        <label>Método de Pagamento: </label>
        <input type="text" name="metodo_pagamento" placeholder="Digite o método de pagamento" required>
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

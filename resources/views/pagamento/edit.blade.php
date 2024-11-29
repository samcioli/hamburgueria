<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Pagamento</title>
</head>
<body>
    <h1>Editar Pagamento</h1>

    <form action="{{ route('pagamentos.update', ['id' => $pagamento->idpagamento]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>ID do Pedido: </label>
        <input type="number" name="pedido_id" value="{{ $pagamento->pedido_id }}" required>
        <br><br>

        <label>Valor Pago: </label>
        <input type="number" name="valor_pago" step="0.01" value="{{ $pagamento->valor_pago }}" required>
        <br><br>

        <label>Data de Pagamento: </label>
        <input type="date" name="data_pagamento" value="{{ $pagamento->data_pagamento }}" required>
        <br><br>

        <label>Método de Pagamento: </label>
        <input type="text" name="metodo_pagamento" value="{{ $pagamento->metodo_pagamento }}" required>
        <br><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

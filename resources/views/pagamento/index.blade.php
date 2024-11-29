<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relação de Pagamentos</title>
</head>
<body>
    <h1>Relação de Pagamentos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Pedido</th>
                <th>Valor Pago</th>
                <th>Data de Pagamento</th>
                <th>Método de Pagamento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagamentos as $pagamento)
                <tr>
                    <td>{{ $pagamento->idpagamento }}</td>
                    <td>{{ $pagamento->pedido_id }}</td>
                    <td>{{ $pagamento->valor_pago }}</td>
                    <td>{{ $pagamento->data_pagamento }}</td>
                    <td>{{ $pagamento->metodo_pagamento }}</td>
                    <td>
                        <a href="{{ route('pagamentos.edit', ['id' => $pagamento->idpagamento]) }}">Editar</a>

                        <form action="{{ route('pagamentos.destroy', ['id' => $pagamento->idpagamento]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ route('pagamentos.create') }}">Cadastrar Novo Pagamento</a>
</body>
</html>

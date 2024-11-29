<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relação de Pedidos</title>
</head>
<body>
    <h1>Relação de Pedidos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Pessoa</th>
                <th>Status</th>
                <th>Data do Pedido</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->idpedido }}</td>
                    <td>{{ $pedido->pessoa_id }}</td>
                    <td>{{ $pedido->status }}</td>
                    <td>{{ $pedido->data_pedido }}</td>
                    <td>{{ $pedido->total }}</td>
                    <td>
                        <a href="{{ route('pedidos.edit', ['id' => $pedido->idpedido]) }}">Editar</a>

                        <form action="{{ route('pedidos.destroy', ['id' => $pedido->idpedido]) }}" method="POST" style="display:inline;">
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
    <a href="{{ route('pedidos.create') }}">Cadastrar Novo Pedido</a>
</body>
</html>

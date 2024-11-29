<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relação de Itens de Pedido</title>
</head>
<body>
    <h1>Relação de Itens de Pedido</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Pedido</th>
                <th>ID Produto</th>
                <th>Quantidade</th>
                <th>Preço Unitário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itensPedido as $item)
                <tr>
                    <td>{{ $item->iditem_pedido }}</td>
                    <td>{{ $item->pedido_id }}</td>
                    <td>{{ $item->produto_id }}</td>
                    <td>{{ $item->quantidade }}</td>
                    <td>{{ $item->preco_unitario }}</td>
                    <td>
                        <a href="{{ route('itenspedido.edit', ['id' => $item->iditem_pedido]) }}">Editar</a>

                        <form action="{{ route('itenspedido.destroy', ['id' => $item->iditem_pedido]) }}" method="POST" style="display:inline;">
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
    <a href="{{ route('itenspedido.create') }}">Cadastrar Novo Item</a>
</body>
</html>

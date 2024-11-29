<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Itens de Pedido</title>
</head>
<body>
    <h1>Lista de Itens de Pedido</h1>

    <a href="{{ route('itempedidos.create') }}">Criar Novo Item</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Valor Unitário</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
                <th>Observações</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($itensPedido as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->valorunitario }}</td>
                    <td>{{ $item->quantidade }}</td>
                    <td>{{ $item->subtotal }}</td>
                    <td>{{ $item->observacoes }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('itempedidos.edit', $item->id) }}">Editar</a> |
                        <form action="{{ route('itempedidos.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este item?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

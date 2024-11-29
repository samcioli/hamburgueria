<!-- resources/views/pedidos/index.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    <a href="{{ route('pedidos.create') }}">Criar Novo Pedido</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Horário</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->idpedido }}</td>
                    <td>{{ $pedido->horario }}</td>
                    <td>{{ $pedido->total }}</td>
                    <td>
                        <a href="{{ route('pedidos.edit', $pedido->idpedido) }}">Editar</a>
                        <form action="{{ route('pedidos.destroy', $pedido->idpedido) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

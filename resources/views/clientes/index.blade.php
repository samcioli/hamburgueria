
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relação de Clientes</title>
</head>
<body>
    <h1>Relação de Clientes</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->idcliente }}</td>
                    <td>{{ $cliente->status }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', ['id' => $cliente->idcliente]) }}">Editar</a>

                        <form action="{{ route('clientes.destroy', ['id' => $cliente->idcliente]) }}" method="POST" style="display:inline;">
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
    <a href="{{ route('clientes.create') }}">Cadastrar Novo Cliente</a>
</body>
</html>

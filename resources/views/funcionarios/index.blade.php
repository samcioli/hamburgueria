
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Funcionários</title>
</head>
<body>
    <h1>Lista de Funcionários</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Matrícula</th>
                <th>Login</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->idfuncionario }}</td>
                    <td>{{ $funcionario->matricula }}</td>
                    <td>{{ $funcionario->login }}</td>
                    <td>
                        <a href="{{ route('funcionarios.edit', ['id' => $funcionario->idfuncionario]) }}">Editar</a>

                        <form action="{{ route('funcionarios.destroy', ['id' => $funcionario->idfuncionario]) }}" method="POST" style="display:inline;">
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
    <a href="{{ route('funcionarios.create') }}">Cadastrar Novo Funcionário</a>
</body>
</html>

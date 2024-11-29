<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relação de Pessoas</title>
</head>
<body>
    <h1>Relação de Pessoas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->idpessoa }}</td>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->email }}</td>
                    <td>
                        <a href="{{ route('pessoas.edit', ['id' => $pessoa->idpessoa]) }}">Editar</a>

                        <form action="{{ route('pessoas.destroy', ['id' => $pessoa->idpessoa]) }}" method="POST" style="display:inline;">
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
    <a href="{{ route('pessoas.create') }}">Cadastrar Nova Pessoa</a>
</body>
</html>

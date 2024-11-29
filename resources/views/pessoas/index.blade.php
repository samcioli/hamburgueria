<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Lista de Pessoas</h1>
        <a href="{{ route('pessoas.create') }}" class="btn btn-primary mb-3">Nova Pessoa</a>

        @if($pessoas->isEmpty())
            <p>Nenhuma pessoa cadastrada.</p>
        @else
            <table class="table table-striped">
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
                                <a href="{{ route('pessoas.edit', $pessoa->idpessoa) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('pessoas.destroy', $pessoa->idpessoa) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>

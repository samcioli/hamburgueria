<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Pessoa</h1>

        <form action="{{ route('pessoas.update', $pessoa->idpessoa) }}" method="POST">
            @csrf <!-- Proteção contra ataques CSRF -->
            @method('PUT') <!-- Método PUT para atualização -->

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $pessoa->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $pessoa->email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="{{ route('pessoas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

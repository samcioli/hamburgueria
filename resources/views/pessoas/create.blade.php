<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Cadastrar Pessoa</h1>

        <form action="{{ route('pessoas.store') }}" method="POST">
            @csrf <!-- Proteção contra ataques CSRF -->

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('pessoas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

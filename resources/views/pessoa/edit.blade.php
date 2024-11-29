<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Pessoa</title>
</head>
<body>
    <h1>Editar Pessoa</h1>

    <form action="{{ route('pessoas.update', ['id' => $pessoa->idpessoa]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome: </label>
        <input type="text" name="nome" value="{{ $pessoa->nome }}" required>
        <br><br>

        <label>Email: </label>
        <input type="email" name="email" value="{{ $pessoa->email }}" required>
        <br><br>

        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" value="{{ $pessoa->data_nascimento }}" required>
        <br><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

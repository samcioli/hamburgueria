<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <h1>Cadastro de Pessoa</h1>

    <form action="{{ route('pessoas.store') }}" method="POST">
        @csrf
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome" required>
        <br><br>

        <label>Email: </label>
        <input type="email" name="email" placeholder="Digite o email" required>
        <br><br>

        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" required>
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

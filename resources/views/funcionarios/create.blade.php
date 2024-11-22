
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Funcionário</title>
</head>
<body>
    <h1>Cadastrar Funcionário</h1>

    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf
        <label>Matrícula: </label>
        <input type="number" name="matricula" placeholder="Digite a matrícula">
        <br><br>
        <label>Login: </label>
        <input type="text" name="login" placeholder="Digite o login">
        <br><br>
        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Digite a senha">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

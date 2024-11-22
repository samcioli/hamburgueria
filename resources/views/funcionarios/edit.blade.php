
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Funcionário</title>
</head>
<body>
    <h1>Editar Funcionário</h1>

    <form action="{{ route('funcionarios.update', ['id' => $funcionario->idfuncionario]) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Matrícula: </label>
        <input type="number" name="matricula" value="{{ $funcionario->matricula }}" placeholder="Digite a matrícula">
        <br><br>
        <label>Login: </label>
        <input type="text" name="login" value="{{ $funcionario->login }}" placeholder="Digite o login">
        <br><br>
        <label>Senha: </label>
        <input type="password" name="senha" value="{{ $funcionario->senha }}" placeholder="Digite a senha">
        <br><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label>Status: </label>
        <input type="text" name="status" placeholder="Digite o status">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

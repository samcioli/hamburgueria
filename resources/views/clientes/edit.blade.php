
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', ['id' => $cliente->idcliente]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Status: </label>
        <input type="text" name="status" value="{{ $cliente->status }}" placeholder="Digite o status">
        <br><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

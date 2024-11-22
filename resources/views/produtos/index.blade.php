
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Foto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->idproduto }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td><img src="{{ asset('storage/'.$produto->foto) }}" width="100" /></td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->estoque }}</td>
                    <td>{{ $produto->tipo }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', ['id' => $produto->idproduto]) }}">Editar</a>

                        <form action="{{ route('produtos.destroy', ['id' => $produto->idproduto]) }}" method="POST" style="display:inline;">
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
    <a href="{{ route('produtos.create') }}">Cadastrar Novo Produto</a>
</body>
</html>

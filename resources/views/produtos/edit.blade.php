
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="{{ route('produtos.update', ['id' => $produto->idproduto]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Descrição: </label>
        <input type="text" name="descricao" value="{{ $produto->descricao }}" placeholder="Digite a descrição">
        <br><br>
        <label>Foto: </label>
        <input type="file" name="foto">
        <br><br>
        <label>Preço: </label>
        <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}" placeholder="Digite o preço">
        <br><br>
        <label>Estoque: </label>
        <input type="number" name="estoque" value="{{ $produto->estoque }}" placeholder="Digite o estoque">
        <br><br>
        <label>Tipo: </label>
        <input type="number" name="tipo" value="{{ $produto->tipo }}" placeholder="Digite o tipo do produto">
        <br><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

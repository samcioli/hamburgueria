
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>

    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Descrição: </label>
        <input type="text" name="descricao" placeholder="Digite a descrição">
        <br><br>
        <label>Foto: </label>
        <input type="file" name="foto">
        <br><br>
        <label>Preço: </label>
        <input type="number" step="0.01" name="preco" placeholder="Digite o preço">
        <br><br>
        <label>Estoque: </label>
        <input type="number" name="estoque" placeholder="Digite o estoque">
        <br><br>
        <label>Tipo: </label>
        <input type="number" name="tipo" placeholder="Digite o tipo do produto">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

<!-- resources/views/pedidos/edit.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedido</title>
</head>
<body>
    <h1>Editar Pedido</h1>

    <!-- Exibindo mensagens de erro ou sucesso -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('pedidos.update', $pedido->idpedido) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Campo para Horário -->
        <label for="horario">Horário:</label>
        <input type="datetime-local" name="horario" id="horario" value="{{ $pedido->horario->format('Y-m-d\TH:i') }}" required><br>

        <!-- Campo para Total -->
        <label for="total">Total:</label>
        <input type="number" step="0.01" name="total" id="total" value="{{ $pedido->total }}" required><br>

        <!-- Botão de Enviar -->
        <button type="submit">Atualizar Pedido</button>
    </form>

    <br>
    <a href="{{ route('pedidos.index') }}">Voltar para a lista de pedidos</a>
</body>
</html>

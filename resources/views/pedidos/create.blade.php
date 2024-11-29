@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Pedido</h1>
    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="horario" class="form-label">Horário</label>
            <input type="datetime-local" class="form-control" id="horario" name="horario" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" step="0.01" class="form-control" id="total" name="total" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

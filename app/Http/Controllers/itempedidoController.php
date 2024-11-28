<?php
class ItemPedidoController {
    public function create($valorUnitario, $quantidade, $subtotal, $observacoes, $status) {
        return new ItemPedido($valorUnitario, $quantidade, $subtotal, $observacoes, $status);
    }

    public function update(ItemPedido $itemPedido, $quantidade, $subtotal, $observacoes, $status) {
        $itemPedido->quantidade = $quantidade;
        $itemPedido->subtotal = $subtotal;
        $itemPedido->observacoes = $observacoes;
        $itemPedido->status = $status;
    }

    public function delete(ItemPedido $itemPedido) {
        unset($itemPedido);
    }
}
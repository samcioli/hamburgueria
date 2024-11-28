<?php


class PedidoController {
    public function create($idPedido, $horario, $total) {
        return new Pedido($idPedido, $horario, $total);
    }

    public function update(Pedido $pedido, $horario, $total) {
        $pedido->horario = $horario;
        $pedido->total = $total;
    }

    public function delete(Pedido $pedido) {
        unset($pedido);
    }
}


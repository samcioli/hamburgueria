<?php



class Pedido {
    public $idPedido;
    public $horario;
    public $total;

    public function __construct($idPedido, $horario, $total) {
        $this->idPedido = $idPedido;
        $this->horario = $horario;
        $this->total = $total;
    }
}
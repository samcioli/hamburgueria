<?php

class ItemPedido {
    public $valorUnitario;
    public $quantidade;
    public $subtotal;
    public $observacoes;
    public $status;

    public function __construct($valorUnitario, $quantidade, $subtotal, $observacoes, $status) {
        $this->valorUnitario = $valorUnitario;
        $this->quantidade = $quantidade;
        $this->subtotal = $subtotal;
        $this->observacoes = $observacoes;
        $this->status = $status;
    }
}
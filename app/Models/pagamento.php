<?php
class Pagamento {
    public $idPagamento;
    public $horario;
    public $valor;
    public $tipo;

    public function __construct($idPagamento, $horario, $valor, $tipo) {
        $this->idPagamento = $idPagamento;
        $this->horario = $horario;
        $this->valor = $valor;
        $this->tipo = $tipo;
    }
}
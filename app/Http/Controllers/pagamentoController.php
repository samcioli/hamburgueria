<?php

class PagamentoController {
    public function create($idPagamento, $horario, $valor, $tipo) {
        return new Pagamento($idPagamento, $horario, $valor, $tipo);
    }

    public function update(Pagamento $pagamento, $horario, $valor, $tipo) {
        $pagamento->horario = $horario;
        $pagamento->valor = $valor;
        $pagamento->tipo = $tipo;
    }

    public function delete(Pagamento $pagamento) {
        unset($pagamento);
    }
}

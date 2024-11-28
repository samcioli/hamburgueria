<?php

class Pessoa {
    public $idPessoa;
    public $nome;
    public $email;

    public function __construct($idPessoa, $nome, $email) {
        $this->idPessoa = $idPessoa;
        $this->nome = $nome;
        $this->email = $email;
    }
}
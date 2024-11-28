<?php

class PessoaController {
    public function create($idPessoa, $nome, $email) {
        return new Pessoa($idPessoa, $nome, $email);
    }

    public function update(Pessoa $pessoa, $nome, $email) {
        $pessoa->nome = $nome;
        $pessoa->email = $email;
    }

    public function delete(Pessoa $pessoa) {
        unset($pessoa);
    }
}
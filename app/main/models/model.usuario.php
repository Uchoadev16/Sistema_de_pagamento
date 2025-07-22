<?php 
require_once('../config/connect.php');

class usuario extends connect{

    //atributos
    private string $tabela1;

    function __construct()
    {
        parent::__construct();
        $this->tabela1 = require('./private/tables.php')['sist_pagamento'][1];
    }

    public function login(string $email, string $senha): int {

    }

    public function cadastrar(string $nome, string $email, string $telefone, string $senha): int{

    }

    public function alterar_senha(string $nova_senha, int $id): int{

    }

}
?>
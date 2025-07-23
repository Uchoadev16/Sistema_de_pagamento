<?php
require_once('../../../local_files.php');
require_once(CONNECT);

if(session_start() == PHP_SESSION_NONE){

    session_start();
}

class sessions extends connect
{
    private string $tabela1;
    function __construct()
    {
        parent::__construct();
        require('private/tables.php');
        $this->tabela1 = $table['sist_pagamento'][1];
    }
    function autenticar_session()
    {
        if (!isset($_SESSION['email']) || !isset($_SESSION['nome']) || !isset($_SESSION['id'])) {

            header('location:../views/auth/login.php');
            exit();
        }
    }
    function tempo_session($tempo = 600)
    {
        try {
            if (isset($_SESSION['ultimo_acesso'])) {

                if (time() - $_SESSION['ultimo_acesso'] > $tempo) {

                    $stmt_ativo = $this->connect->prepare("UPDATE $this->tabela1 SET `ativo`= 0 WHERE id = :id");
                    $stmt_ativo->bindValue(':id', $_SESSION['id']);
                    if ($stmt_ativo->execute()) {

                        header('location:../views/auth/login.php');
                        exit();
                    } else {
                        header('location: ../views/faltalErro.php');
                        exit();
                    }
                }
            }
            $_SESSION['ultimo_acesso'] = time();
        } catch (PDOException $e) {
            header('location: ../views/faltalErro.php');
            exit();
        }
    }
    function quebra_session()
    {
        try {
            $stmt_ativo = $this->connect->prepare("UPDATE $this->tabela1 SET `ativo`= 0 WHERE id = :id");
            $stmt_ativo->bindValue(':id', $_SESSION['id']);
            if ($stmt_ativo->execute()) {

                session_unset();
                session_destroy();
                header('location:../views/auth/login.php');
                exit();
            } else {
                header('location: ../views/faltalErro.php?erro_desativar');
                exit();
            }
        } catch (PDOException $e) {
            header('location: ../views/faltalErro.php');
            exit();
        }
    }
}

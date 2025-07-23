<?php
require_once('../config/connect.php');

class usuario extends connect
{
    //atributos
    private string $tabela1;

    //contrutor
    function __construct()
    {
        parent::__construct();
        $this->tabela1 = require ('./private/tables.php')['sist_pagamento'][1];
    }

    //metodos 
    public function login(string $email, string $senha): int
    {
        try {
            $stmt = $this->connect->prepare("SELECT * FROM $this->tabela1 WHERE email = :email");
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                if (password_verify($senha, $user['senha'])) {

                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['nome'] = $user['nome'];
                    $_SESSION['email'] = $user['email'];
                    return 1;
                } else {
                    return 2;
                }
            } else {

                return 3;
            }
        } catch (PDOException $e) {

            header('location: ../views/faltalErro.php');
            exit();
        }
    }

    public function cadastrar(string $nome, string $email, string $telefone, string $senha): int
    {
        try {
            $stmt = $this->connect->prepare("SELECT id FROM $this->tabela1 WHERE email = :email OR telefone = :telefone");
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':telefone', $telefone);
            $stmt->execute();
            if ($stmt->fetch(PDO::FETCH_ASSOC)) {
                return 3;
            }

            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = $this->connect->prepare("INSERT INTO $this->tabela1 (nome, email, telefone, senha, tipo) VALUES (:nome, :email, :telefone, :senha, 'comum')");
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':telefone', $telefone);
            $stmt->bindValue(':senha', $hash);
            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        } catch (PDOException $e) {
            header('location: ../views/faltalErro.php');
            exit();
        }
    }

    public function alterar_senha(string $nova_senha, int $id): int
    {
        try {
            $hash = password_hash($nova_senha, PASSWORD_DEFAULT);
            $stmt = $this->connect->prepare("UPDATE $this->tabela1 SET senha = :senha WHERE id = :id");
            $stmt->bindValue(':senha', $hash);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        } catch (PDOException $e) {
            header('location: ../views/faltalErro.php');
            exit();
        }
    }
}

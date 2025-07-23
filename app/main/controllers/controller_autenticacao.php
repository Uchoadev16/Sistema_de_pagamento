<?php
require_once('../models/model.usuario.php');

//cadastro
if (
    isset($_POST['nome']) && !empty($_POST['nome']) && is_string($_POST['nome'])
    && isset($_POST['email']) && !empty($_POST['email']) && is_string($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
    && isset($_POST['telefone']) && !empty($_POST['telefone']) && is_string($_POST['telefone'])
    && isset($_POST['senha']) && !empty($_POST['senha']) && is_string($_POST['senha'])
) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $result = $usuario->cadastrar($nome, $email, $telefone, $senha);
    switch ($result) {
        case 1:
            header('Location: ../views/auth/login.php?sucesso');
            exit();
        case 2:
            header('Location: ../views/auth/cadastro.php?erro');
            exit();
        case 3:
            header('Location: ../views/auth/cadastro.php?ja_cadastrado');
            exit();
        default:
            header('Location: ../index.php');
            exit();
    }
}

//login
else if (
    isset($_POST['email']) && !empty($_POST['email']) && is_string($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
    && isset($_POST['senha']) && !empty($_POST['senha']) && is_string($_POST['senha'])
) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $result = $usuario->login($email, $senha);
    switch ($result) {
        case 1:
            header('Location: ../views/inicio.php');
            exit();
        case 2:
            header('Location: ../views/auth/login.php?erro');
            exit();
        case 3:
            header('Location: ../views/auth/login.php?erro_email');
            exit();
        case 4:
            header('Location: ../views/auth/login.php?erro_senha');
            exit();
        case 5:
            header('Location: ../views/auth/login.php?erro_ativo');
            exit();
        default:
            header('Location: ../index.php');
            exit();
    }
} else {

    header('location:../index.php?parametros_invalidos');
    exit();
}

<?php 
require_once '../models/usuario.php';

//login
if(isset($_POST['email']) && !empty($_POST['email']) && is_string($_POST['email']) 
&& isset($_POST['senha']) && !empty($_POST['senha']) && is_string($_POST['senha'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $result = $usuario->login($email, $senha);
    switch($result){
        case 1:
            header('Location: ../views/start.php');
            exit();
        case 2:
            header('Location: ../views/login.php?erro=1');
            exit();
        case 3:
            header('Location: ../views/login.php?erro=2');
            exit();
        default:
            header('Location: ../index.php');
            exit();
    }
}

//cadastro
if(isset($_POST['nome']) && !empty($_POST['nome']) && is_string($_POST['nome']) 
&& isset($_POST['email']) && !empty($_POST['email']) && is_string($_POST['email']) 
&& isset($_POST['telefone']) && !empty($_POST['telefone']) && is_string($_POST['telefone']) 
&& isset($_POST['senha']) && !empty($_POST['senha']) && is_string($_POST['senha'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $result = $usuario->cadastro($nome, $email, $telefone, $senha);
    switch($result){
        case 1:
            header('Location: ../views/start.php');
            exit();
        case 2:
            header('Location: ../views/login.php?erro=3');
            exit();
        default:
            header('Location: ../index.php');
            exit();
    }
}
?>
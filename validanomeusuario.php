<?php
session_start();
include_once ("connection.php");
include_once ("database.php");
$link = DBConnect();

if((isset($_POST['email'])) &&(isset($_POST['nome-usuario']))){
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $nomeusuario = mysqli_real_escape_string($link,$_POST['nome-usuario']);
    

    $usuario= DBRead('usuarios',"WHERE email = '$email' && nome_usuario = '$nomeusuario' LIMIT 1");

    if (empty($usuario)){
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: index.php");
    }else{
        header("Location: recuperarsenha.php");
    }
}else{
    $_SESSION['loginErro'] = "Usuário ou senha incorretos";
    header("Location: index.php");
}
?>

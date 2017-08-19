<?php
    session_start();
include_once ("connection.php");
include_once ("database.php");
$link = DBConnect();

    if((isset($_POST['email'])) &&(isset($_POST['senha']))){
        $email = mysqli_real_escape_string($link,$_POST['email']);
        $senha = mysqli_real_escape_string($link,$_POST['senha']);
        $senha = md5($senha);

        $usuario= DBRead('usuarios',"WHERE email = '$email' && senha = '$senha' LIMIT 1");
        
        if (empty($usuario)){
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }else{
            if ($usuario[0]["nivel_acesso"] == '1'){
                header("Location: administrativo.php");
            }else{
                header("Location: vendedor.php");
            }
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha incorretos";
        header("Location: index.php");
    }

    ?>

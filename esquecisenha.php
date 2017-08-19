<?php
session_start();
include_once ("connection.php");
$link = DBConnect();

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Esqueci minha Senha</title>
</head>
<body>
<form method="post" action="validanomeusuario.php">
    <label>E-mail</label>
    <input type="email" name="email" id="inputEmail"><br>
    <label>Nome de Usuario</label>
    <input type="text" name="nome-usuario" id="inputNome-usuario"><br>
    <button type="submit">Recuperar</button>

</form>
</body>
</html>
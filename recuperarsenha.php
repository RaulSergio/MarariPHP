<?php
session_start();
include_once ("connection.php");
$link = DBConnect();

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
</head>
<body>

<form method="post" action="validasenha.php">
    <label>Nova Senha</label>
    <input type="password" name="novasenha" id="inputnovasenha"><br>
    <button type="submit">Alterar</button>

</form>
</body>
</html>
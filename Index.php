<?php
    session_start();
include_once ("connection.php");
$link = DBConnect();

?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="validate.php">
            <label>E-mail</label>
            <input type="email" name="email" id="inputEmail"><br>
            <label>Senha</label>
            <input type="password" name="senha" id="inputSenha"><br>
            <button type="submit">Acessar</button>
        </form>
    <p>
        <?php if (isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
        }

        ?>
    </p>
    </body>
</html>



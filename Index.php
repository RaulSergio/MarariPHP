<?php
    session_start();
include_once ("connection.php");
$link = DBConnect();

?>
<html>

    <head>
        <meta charset="UTF-8"/>
        <title>Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
    </head>

    <body>
        <form method="post" action="validate.php">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-5 col-md-3">
                        <div class="form-login">
                            <h1>SWECCA</h1>
                            <label>E-mail</label>
                            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Email" />
                            </br>
                            <label>Senha</label>
                            <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="Senha" />
                            </br>
                            <div class="wrapper">
                                <span class="group-btn">
                                    <a href="#" class="btn btn-primary btn-md">Acessar <i class="fa fa-sign-in"></i></a>
                                </span>
                            </div>
                            </br>
                            <a href="esquecisenha.php">Esqueci minha senha</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <!--form method="post" action="validate.php">
            <label>E-mail</label>
            <input type="email" name="email" id="inputEmail"><br>
            <label>Senha</label>
            <input type="password" name="senha" id="inputSenha"><br>
            <button type="submit">Acessar</button>
        </form-->
    <p>
        <?php if (isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
        }

        ?>
    </p>
    </body>
</html>



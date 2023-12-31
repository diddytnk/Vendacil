<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles2.css">
</head>
<body class="">
    <div class="container text-center">
        <div>
            <h2>Tela de Login</h2>

            <?php

                if (!empty($_SESSION['ok'])) {
                    echo $_SESSION['ok'];
                    unset($_SESSION['ok']);
                }

            ?>
            <div class="formgeral">

                <form action="Web/login.php" method="post">
                    <label class="form-label formularionome" for="usuario"><b>Usuário</b></label>
                    <input class="form-control mb-3" type="email" name="user" id="usuario" placeholder="Coloque seu Usuário" required>
                
                    <label class="form-label formularionome" for="pass"><b>Senha</b></label>
                    <input class="form-control mb-3" type="password" name="senha" id="pass" placeholder="Digite sua senha" required>

                    <input class="btn btn-primary btn-lg" type="submit" value="Logar">
                    <a class="btn btn-danger btn-lg" href="Web/cadastrar.php">Cadastrar</a>
                </form>

            </div>
            
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
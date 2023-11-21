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
            <h3>Complete seu cadastro antes de navegar</h3>

            <?php

                if (!empty($_SESSION['ok'])) {
                    echo $_SESSION['ok'];
                    unset($_SESSION['ok']);
                }

            ?>
            <div class="formgeral">

             
            <a class="btn btn-warning btn-lg" href="index.php">Voltar</a>
                    <a class="btn btn-danger btn-lg" href="Web/cadastrar.php">Cadastrar</a>
                    <a class="btn btn-primary btn-lg" href="telalogin.php"> Login </a>

                </form>

            </div>
            
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
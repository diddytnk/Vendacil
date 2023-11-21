<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="principal.php"><img src="..\Recursos/CAIXA.png" alt="" width="50px"></a>
            <a class="btn btn-dark" href="principal.php">Voltar</a>
        </div>
    </nav>

    <div class="container mt-4 text-center">
        <h2>Realizar compra</h2>
        <p>Preencha as informações para concluir sua compra.</p>

        
        <form action="../Web/bd2.php" method="post">

            <div class="row py-2">
                <div class="col-md-12 ">
                    <input class="form-control" type="text" name="nomec" id="" placeholder="Nome registrado no cartão" required>
                </div>

                <div class="col-md-12 mt-3 ">
                    <input class="form-control" type="text" name="numeroc" id="" placeholder="Número do Cartão" required>
                </div>


            <div class="row py-2">
                <div class="col-md-6">
                    <p> Selecione o tamanho desejado </p>
                    <select class="form-control" name="especificacao" id="" required>
                        <option value="P">P</option>
                        <option value="M">M</option>
                        <option value="G">G</option>
                        <option value="GG">GG</option>
                    </select>
                </div>




                <div class="col-md-6">
                    <p>Data de expiração </p>
                    <input class="form-control" type="date" name="datadevencimento" id="" required>
                </div>
            </div>





    
           
            <div class="row py-2 border border-dark rounded mt-3">
                <div class="col-md-15">
                    <label class="form-label" for="cod">Código de segurança</label>
                    <input class="form-control" type="password" name="codigo" id="" required>
                </div>


            </div>




          <input class="btn btn-lg btn-success mb-5 mt-3" href="successo.php" type="submit" value="Realizar Compra">


    </div>
</form>
        <?php

            if (!empty($_SESSION['ok'])) {
                echo $_SESSION['ok'];
                unset($_SESSION['ok']);
            }

        ?>


    <br>
    <br>
    <br>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

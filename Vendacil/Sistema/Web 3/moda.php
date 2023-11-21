<?php

session_start();

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="..\styles.css">
</head>
<body class="">



<nav class="navbar bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img src="..\Recursos/CAIXA.png" alt="" width="50px">
            <span class="fw-bolder">VENDACIL</span>
    </a>

<div class="d-flex">
<a class="btn btn-danger" href="principal.php">VOLTAR</a>
        </div>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="icongeral">
                <div class="icons d-flex flex-column align-items-center">
                    <div class="textos">
                        <h1>Jordan 4 Gray</h1>
                    </div>
                    <img src="..\Recursos/jgray.png" class="jgray" alt="">
                    <div class="row py-2 border border-dark rounded mt-3" style="width: 470px;">
                <p>Tamanhos disponíveis 39, 40, 41 e 42
                        </p>
                        
</div>
                    <a class="btn btn-lg btn-success mt-3" href="comprartenis.php">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="icongeral">
                <div class="icons d-flex flex-column align-items-center">
                    <div class="textos">
                        <h1>Camiseta Nike Vermelha</h1>
                    </div>
                    <img src="..\Recursos/camiseta nike.png" class="camisetanike" alt="">
                    <div class="row py-2 border border-dark rounded mt-3" style="width: 290px;">
                <p>Tamanhos disponíveis P, M, G e GG
                    
</div>
                    <a class="btn btn-lg btn-success mt-3" href="comprarcamisa.php">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>





    <footer class="footer text-center fixed-bottom bg-dark py-3">
        <div class="container">
            <p class="text-light">Todos os direitos reservados. 2023</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
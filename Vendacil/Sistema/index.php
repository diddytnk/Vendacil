<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendacil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>
<body class="imgele">

<nav class="navbar bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img src="Recursos/CAIXA.png" alt="" width="50px">
            <span class="fw-bolder">VENDACIL</span>

        
    </a>

        <div class="row py-2 border border-dark rounded">
        <p class="text-center fw-bolder ">Bem-Vindo a VENDACIL, a sua loja de compra de produtos!</p>
        <p2 class = "text-center  "> Faça seu cadastro para começar suas compras </p>
</div>      
            



<div class="d-flex">
            <a class="btn btn-danger btn-lg me-2" href="Web/cadastrar.php">Cadastrar</a>
            <a class="btn btn-success btn-lg" href="telalogin.php">Login</a>
        </div>
    </div>
</nav>



<div class="icongeral">

<div class="icons">
    <div class="textos">
<h1> ELETRÔNICOS </h1>
</div>
   <a href="fazcadastro.php"> <img src="Recursos/eletros.png" class="eletro" alt=""></a>
</div>



<div class="icons">
       <div class="textos">
<h1> MODA </h1>
</div>
<a href="fazcadastro.php">  <img src="Recursos/roup.png" class="roupa" alt=""> </a>
</div>


<div class="icons">
       <div class="textos">
<h1> LIVROS </h1>
</div>
<a href="fazcadastro.php"> <img src="Recursos/livro.png" class="livro" alt=""> </a>
</div>

<div class="icons">
       <div class="textos">
<h1> BRINQUEDOS </h1>
</div>
<a href="fazcadastro.php"> <img src="Recursos/brinquedo.png" class="brinquedos" alt=""> </a>
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


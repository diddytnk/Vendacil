<?php
    //print_r($_POST);

     /* CONEXÃO COM O BANCO DE DADOS */
     $pdo = new PDO('mysql:host=localhost;dbname=exemplo','root','');

     /* PREPARAÇÃO PARA A GRAVAÇÃO */
     $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");

     // ENVIA OS DADOS D EUSUÁRIO E SENHA RECEBIDOS PELO POST
     $sql -> execute(array($_POST['user'],$_POST['senha']));

    // ORGANIZA OS RESUTADOS DA PESQUISA DE FORMA ASSOCIATIVA
    $result = $sql -> fetchALL(PDO::FETCH_ASSOC);

    //print_r($result);
    if (empty($result)) {session_start();
    $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Usuário não cadrastado!</div>";
    echo "<meta http-equiv= 'refresh' content='0; URL=http://localhost/BPRO2/sistemab/Sistema/telalogin.php'/>";
    } else {
        session_start();
        //INICIA SESSAO USUARIO E GUARDA O USUARIO ATIVO
        $_SESSION['usuario'] = $_POST['user'];
        $_SESSION['email'] = $_POST['user'];
        echo "<meta http-equiv= 'refresh' content='0; URL=../Web 3/principal.php'/>";
    }
    
    
?>
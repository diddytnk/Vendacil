<?php
  
     $pdo = new PDO('mysql:host=localhost;dbname=exemplo','root','');

   
     $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");

     $sql -> execute(array($_POST['user'],$_POST['senha']));

    $result = $sql -> fetchALL(PDO::FETCH_ASSOC);

 
    if (empty($result)) {session_start();
    $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Usuário não cadrastado!</div>";
    echo "<meta http-equiv= 'refresh' content='0; URL=http://localhost/BPRO2/sistemab/Sistema/telalogin.php'/>";
    } else {
        session_start();
        
        $_SESSION['usuario'] = $_POST['user'];
        $_SESSION['email'] = $_POST['user'];
        echo "<meta http-equiv= 'refresh' content='0; URL=../Web 3/principal.php'/>";
    }
    
    
?>

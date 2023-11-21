<?php
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=exemplo', 'root', '');

    $sql = $pdo->prepare("INSERT INTO `usuarioscartao` (`nomec`, `numeroc`, `datadevencimento`, `codigo`, `especificacao`, `email`) VALUES (?, ?, ?, ?, ?, ?)");

    $sql->execute(array(
        $_POST['nomec'],
        $_POST['numeroc'],
        $_POST['datadevencimento'],
        $_POST['codigo'],
        $_POST['especificacao'],
        $_SESSION['email']
    ));

    echo "<meta http-equiv='refresh' content='0; URL=../Web 3/successo.php'/>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela Inicial</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['login']; ?>!</h2>
    <p>Conteúdo da tela inicial...</p>
    <a href="logout.php">Sair</a>
</body>
</html>

<?php
session_start();

if (isset($_POST['submit'])) {
    include 'config.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['login'] = $login;
        header("Location: tela_inicial.php");
        exit();
    } else {
        $erro = "Login ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($erro)) { echo "<p>$erro</p>"; } ?>
    <form action="login.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" required><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <input type="submit" name="submit" value="Entrar">
    </form>
</body>
</html>

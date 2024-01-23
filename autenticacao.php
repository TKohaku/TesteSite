<?php
// Conectar ao banco de dados
$servername = "sqldb-perena.database.windows.net";
$username = "admin.perena";
$password = "tura789!@#";
$dbname = "perena";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter os dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

// Consulta SQL para verificar se o usuário existe
$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
$result = $conn->query($sql);

// Verificar se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    // Usuário autenticado com sucesso
    header("Location: menu.html");
    echo "Login bem-sucedido!";
} else {
    // Falha na autenticação
    echo "Login ou senha incorretos.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

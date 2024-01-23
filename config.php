<?php
// Conectar ao banco de dados
$servername = "sqldb-perena.database.windows.net";
$username = "admin.perena";
$password = "tura789!@#";
$dbname = "perena";

$conn = new mysqli($hostname, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>

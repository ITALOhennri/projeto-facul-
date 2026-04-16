<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_bolos";

$conn = new mysqli($host, $user, $pass, $db);

// testar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

echo "Conectado com sucesso!";
?>
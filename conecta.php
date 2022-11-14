<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";

try {
    $conn = new PDO ("mysql: host=$servidor; dbname=elac", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão efetuada!";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>

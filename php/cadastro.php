<?php
include_once 'conecta.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

try {
    $stm = $conn->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
    $stm->bindParam(':nome', $nome);
    $stm->bindParam(':email', $email);
    $stm->bindParam(':senha', $senha);
    $stm->execute();
    echo "Cadastro efetuado!<br>";
} catch (Exception $e) {
    echo $sql . "<br>" . $e.getMessage() . "<br>";
}
?>

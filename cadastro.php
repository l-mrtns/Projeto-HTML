<?php
include_once 'conecta.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

try {
    $stm = $conn->prepare("INSERT INTO usuario (nome, email, telefone) VALUES (:nome, :email, :telefone)");
    $stm->bindParam(':nome', $nome);
    $stm->bindParam(':email', $email);
    $stm->bindParam(':telefone', $telefone);
    $stm->execute();
    echo "Cadastro efetuado!<br>";
} catch (Exception $e) {
    echo $sql . "<br>" . $e->getMessage() . "<br>";
}
?>

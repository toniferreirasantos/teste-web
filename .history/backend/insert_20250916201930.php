<?php

$nome_cliente = $_POST['nome_cliente'];
$email_cliente = $_POST['email_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];


try {
    $pdo = new PDO('mysql:host=localhost;dbname=banco_teste', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO clientes (nome, email, telefone) VALUES (:nome, :email, :telefone)");
    $stmt->bindParam(':nome', $nome_cliente);
    $stmt->bindParam(':email', $email_cliente);
    $stmt->bindParam(':telefone', $telefone_cliente);

    $stmt->execute();

    echo "Cliente inserido com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao inserir cliente: " . $e->getMessage();
}
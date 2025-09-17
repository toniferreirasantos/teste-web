<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=banco_teste', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt->execute();

    echo "Conectado com sucesso!";

} catch (PDOException $e) {
    echo "Erro ao inserir cliente: " . $e->getMessage();
}
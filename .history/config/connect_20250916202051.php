<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=banco_test', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado com sucesso!";

} catch (PDOException $e) {
    echo "Erro ao Conetar ao banco de dados: " . $e->getMessage();
}
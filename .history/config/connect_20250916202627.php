<?php

try {
    $connect = new PDO('mysql:host=localhost;dbname=banco_teste', 'root', '');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erro ao Conetar ao banco de dados: " . $e->getMessage();
}
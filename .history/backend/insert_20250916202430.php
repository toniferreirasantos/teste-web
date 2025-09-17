<?php

include '../config/connect.php';

$nome_cliente = $_POST['nome_cliente'];
$email_cliente = $_POST['email_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];


$query_insert =
"   INSERT INTO clientes (
        nome,
        email,
        telefone
    )
    VALUES (
        '$nome_cliente',
        '$email_cliente',
        '$telefone_cliente'
    )
";
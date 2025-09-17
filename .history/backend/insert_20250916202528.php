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


$query_insert =
" INSERT INTO TAB_ALGUMA_COISA_AQUI (
        parametro1,
        parametro2,
        parametro3
    )
    VALUES (
        :parametro1,
        :parametro2,
        :parametro3
    )
";

$stmt = $connect->prepare($query_insert);
if( !$stmt ) echo "Erro: {$connect->errno} - {$connect->error}";

if( !$stmt->execute() ) {
    echo 'Erro: '. $stmt->errorInfo()[2];
}

echo "Dados do cliente salvos com Sucesso";
<?php  include 'config/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Teste</title>

    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/154/154858.png">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
    

    <form id="form_cadastro">

        <input class="campo-entrada" type="text" id="nome_cliente" name="nome_cliente" placeholder="Informe sem nome" value="Nico">
        <input class="campo-entrada" type="text" id="email_cliente" name="email_cliente" placeholder="Informe sem e-mail">
        <input class="campo-entrada" type="text" id="telefone_cliente" name="telefone_cliente" placeholder="Informe sem Telefone">

        <button type="button" onclick="salvar()">
            Enviar  
        </button>

    </form>


    <?php
        $consulta = "SELECT * FROM clientes";
        $stmt = $connect->prepare($consulta);
        if( !$stmt ) echo "Erro: {$connect->errno} - {$connect->error}";

        if( !$stmt->execute() ) {
            echo 'Erro: '. $stmt->errorInfo()[2];
        }
        if (  $stmt->rowCount() > 0 ) {
         
            $clientes = $stmt->fetchAll(PDO::FETCH_OBJ);

            foreach ($clientes as $cliente) {
                // echo $cliente->nome .' - '. $cliente->email, '<br>';
                
            }
            
        }

    ?>


    <table class="table table-bordered table-condensed table-hover smart-form table-padrao">
        <thead>
            <tr>
                <th>*</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>*</td>
                <td>Nome Teste</td>
                <td>email@mail.com</td>
            </tr>

        </tbody>

    </table>




    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <script src="assets\js\script.js"></script>
</body>
</html>
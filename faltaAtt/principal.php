<?php
    require('back-end/clienteDAO.php');
    $banco = new ClienteDAO();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <title>Página Inicial</title>
</head>
<body>
    <h3>Cadastro</h3>
    <form action="adiciona.php" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="number" name="cpf" placeholder="xxx.xxx.xxx-xx">
        <input type="email" name="email" placeholder="...@...">
        <button type="submit">Enviar</button>
    </form><br><br>
    <h3>Clientes cadastrados</h3>
    <table>
        <tr>
            <th>Código</th>
            <th>Cliente</th>
            <th>CPF</th>
            <th>Email</th>
        </tr>
        <?php $banco->listar();?>
    </table>
</body>
</html>
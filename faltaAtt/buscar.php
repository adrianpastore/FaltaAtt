<?php
    require('back-end/clienteDAO.php');
    require('back-end/cliente.php');
    
    $banco = new ClienteDAO();
    $cli = $banco->ObterCliente($_GET['codcliente']);
    $cli = new Cliente($cli['nome'], $cli['cpf'], $cli['email']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualização de dados</title>
</head>
<body>
    <h3>Atualizar dados</h3> Seu código: 
    <?php echo '<label type="text" name="cg">' . $_GET['codcliente'] .' </label>'?> <br><br>
    <form action="alterar.php" method="get">
        <?php
            echo 'Nome: <input type="text" name="nome" placeholder="' . $cli->ObterNome() .'" value=""><br><br>
            Cpf: <input type="number" name="cpf" placeholder="' . $cli->ObterCpf() .'" value=""><br><br>
            E-mail: <input type="email" name="email" placeholder="' . $cli->ObterEmail() .'" value=""><br>
            <a href="alterar.php?codcliente='.$cli->ObterCodigo().'" name="alterarA"><input name"alterar" class="btn btn-outline-info" type="submit" value="Alterar"></a>';
        ?>
        
        <br><br>
    </form><br>
    <?php 
    ?>
    <button id="pi">Página Inicial</button>
    <script>
        var btn = document.querySelector('#pi');
        btn.addEventListener('click', function () {
            window.location.href = "principal.php";
        });
    </script>
</body>
</html>
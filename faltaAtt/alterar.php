<?php
    require('back-end/clienteDAO.php');
    require('back-end/cliente.php');

    
    $banco = new ClienteDAO();
    $cli = new Cliente($_GET['nome'], $_GET['cpf'], $_GET['email']);
    $banco->AtualizarCliente($cli, $_GET['codcliente']);
    //header('Location: principal.php');
?>
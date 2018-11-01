<?php
    require('back-end/clienteDAO.php');

    $banco = new ClienteDAO();
    $banco->Deleta($_GET['codcliente']);
    header('Location: principal.php'); 
?>
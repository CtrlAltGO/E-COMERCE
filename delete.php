<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM pedidos WHERE idpedidos = $id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM pedidos WHERE idpedidos = $id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: carrinho.php');
   
?>
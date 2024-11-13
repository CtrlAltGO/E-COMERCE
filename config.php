<?php

    $dbHost = 'localhost:3307';
    $dbUsername = 'root';
    $dbPassword = 'Str001305!';
    $dbName = 'e-commerce';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if ($conexao->connect_error) 
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "OK";
    //}

?>
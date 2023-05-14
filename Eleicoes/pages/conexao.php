<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'sistemaeleitoral';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno){
        echo "Erro";
    }
    else
    {
        //echo "Conexão efectuada com sucesso";
    }

?>
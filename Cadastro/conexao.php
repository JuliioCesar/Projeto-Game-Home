<?php
    //Credencias 
    $host= "localhost";
    $user = "root";
    $pass = "";
    $db = "cadastro";

    //Conexão
    $con = new mysqli($host, $user, $pass, $db);

    //verificação
    if(!$con){
        echo 'Não foi possivel conectar ao banco de dados';
    }elseif($con === true){
        echo 'Conectado';
    }
?>
<?php 

    $hostname = "localhost";
    $login = "root";
    $senha = "senha_da_nasa";
    $banco = "lista";

    $conn = mysqli_connect($hostname, $login, $senha, $banco);

    if($conn){
       //Aqui é uma área para realizar o teste de conexão
    }
    else {
        echo "Erro de conexão";
    }

?>
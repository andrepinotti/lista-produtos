<?php

    session_start();

    require_once("server.php");
    //A tarefa dessa página será mandar os dados do formulário para o banco de dados

    if(isset($_GET['enviar'])){
        if(!empty($_GET['nomeproduto']) && !empty($_GET['produto']) && !empty($_GET['descricao']) ){
            $nome = mysqli_real_escape_string($conn, $_GET['nomeproduto']);
            $preco = mysqli_real_escape_string($conn, $_GET['produto']);
            $codigo = mysqli_real_escape_string($conn, $_GET['descricao']);

            //Agora faremos a parte de envio de um comando ao banco de dados
            $sql =  "INSERT INTO produtos(nome, valor, descricao) VALUES ('$nome', '$preco', '$codigo')";
            $enviar = mysqli_query($conn, $sql);

            if($enviar){
                $_SESSION['mensagem'] = "Produto Cadastrado";
                header("location:cadastro.php");
                exit;
            }
            else {
                $_SESSION['mensagem'] = "Produto NÃO Cadastrado: " . mysqli_error($conn);
                header("location:cadastro.php");
                exit;
            }
        }
        else {
            $_SESSION['mensagem'] = "Por favor, preencha todos os campos.";
            header("location:cadastro.php");
            exit;
            }
    }

?>


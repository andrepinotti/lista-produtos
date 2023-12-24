<?php
session_start();

    require_once("server.php");
    if(!empty($_SESSION['mensagem'])){
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }

?>

<link rel="stylesheet" href="dist/css/bootstrap.min.css">

<div class="container mt-4">
    <form action="listar.php" method="get" accept-charset="utf-8" >
        <div class="mb-3">
            <label for="">Nome Produto: </label>
            <input type="text" name="nomeproduto" placeholder="Digite o nome do produto"><br>
        </div>

        <div class="mb-3">
            <label for="">Preço Produto: </label>
            <input type="text" name="produto" placeholder="Digite o valor do produto"><br>
        </div>

        <div class="mb-3">
            <label for="">Disponível</label>
            <select name="disponibilidade" id="">
                <option value="sim">Sim</option>
                <option value="não">Não</option>
            </select> <br>
        </div>

       <div class="mb-3">
            <label for="">Descrição</label> <br>
            <textarea name="descricao" id="" cols="30" rows="10"></textarea><br>
       </div>

       <div class="mb-3">
            <input type="submit" name="enviar" class="btn btn-primary"><br>
       </div>
    
    </form>

    <a href="lista.php">Lista de Produtos</a>

</div>


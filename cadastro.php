<?php
session_start();

    require_once("server.php");
    if(!empty($_SESSION['mensagem'])){
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }

    include "header.php";

?>



<div class="m-5 d-flex justify-content-center">
    <h1 class="h1">
        Cadastro de Produtos
    </h1>
</div>


<div class="container mt-2 d-flex justify-content-center">
    <form action="listar.php" method="get" accept-charset="utf-8" >
        <div class="mb-3">
            <label for="">Nome: </label>
            <input class="form-control" type="text" name="nomeproduto" placeholder="Digite o nome do produto"><br>
        </div>

        <div class="mb-3">
            <label for="">Preço: </label>
            <input class="form-control" type="number" name="produto" placeholder="Digite o valor do produto"><br>
        </div>

        <div class="mb-3">
            <label for="">Disponível:</label>
            <select class="form-control" name="disponibilidade" id="">
                <option value="sim">Sim</option>
                <option value="não">Não</option>
            </select> <br>
        </div>

       <div class="mb-3">
            <label for="">Descrição:</label> <br>
            <textarea class="form-control" name="descricao" id="" cols="30" rows="10"></textarea><br>
       </div>

       <div class="mb-3">
            <input type="submit" name="enviar" class="btn btn-primary"><br>
       </div>
    
    </form>

    <!--<a href="lista.php">Lista de Produtos</a>-->

</div>


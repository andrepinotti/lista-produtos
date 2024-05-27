<?php
    require_once("server.php");
    include "header.php";
    $comando = "SELECT * FROM produtos ORDER BY valor ASC";

    $enviar = mysqli_query($conn, $comando);
    $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>

<style>
    .table-container{
        width: 80%;
    }
</style>

<div class="table-container">
    <table class="table table-bordered m-5 mb-1">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Disponibilidade</th>
            <th>Descrição</th>
        </tr>

        <?php
            foreach($resultado as $produto):
                $nome = $produto['nome'];
                $preco = $produto['valor'];
                $disponibilidade = $produto['disponibilidade'];
                $descricao = $produto['descricao'];
                if($disponibilidade=="Sim"){
                    $disponibilidade = "Disponível";
                } else {
                    $disponibilidade = "Indisponível";
                }
        ?>

        <tr>
            <td><?= $nome ?></td>
            <td><?= $preco ?></td>
            <td><?= $disponibilidade ?></td>
            <td><?= $descricao ?></td>
        </tr>

        <?PHP endforeach;?>

    </table>
    <a href="cadastro.php"><button class="btn btn-primary m-5">Cadastrar Novo Produto</button></a>
</div>



<?php
    require_once("server.php");
    $comando = "SELECT * FROM produtos ORDER BY valor ASC";

    $enviar = mysqli_query($conn, $comando);
    $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>
<table border="1px solid black">
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
<br>

<a href="cadastro.php"><button>Cadastrar Novo Produto</button></a>
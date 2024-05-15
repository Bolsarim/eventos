<?php include "cabecalho.php"; ?>

<h2>Ambiente administrativo</h2>


<?php include "conexao.php"; ?>

<table class="table">
    <thead>
        <tr>
            
            <th>Nome do Eventos</th>
            <th>Tipo</th>
            <!-- <th>Data</th> -->
            <!-- <th>Local</th> -->
            <!-- <th>Preço</th> -->
            <th>Quantidade</th>

        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "select * from tb_eventos";
        $resultado = mysqli_query($conexao, $sql);
        while($umEvento = mysqli_fetch_assoc($resultado)):
        ?>
    <tr>
            
            <td><?=$umEvento['nome'];?></td>
            <td><?=$umEvento['tipo'];?></td>
            <!-- <td><?=$umEvento['data'];?></td> -->
            <!-- <td><?=$umEvento['local'];?></td> -->
            <!-- <td><?=$umEvento['preco'];?></td> -->
            <td><?=$umEvento['quantidade'];?></td>
            <td>
                <a href="form-alterar.php?id=<?=$umEvento['id'];?>">Editar</a>
                <a href="excluir.php?id=<?=$umEvento['id'];?>">Excluir</a>
            </td>
    </tr>
    <?php endwhile;
    mysqli_close($conexao);
    ?>
    </tbody>
</table>
<a href="form-inserir.php" class="btn btn-primary">EVENTOS</a>

<?php include "rodape.php"; ?>



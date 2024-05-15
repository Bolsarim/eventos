<?php include "cabecalho.php"; ?>

<h2>Ambiente administrativo</h2>


<?php include "conexao.php"; ?>

<table class="table">
    <thead>
        <tr>
            
            <th>Nome do Eventos</th>
             <th>Data</th> 
             <th>Local</th> 
             <th>Preço</th> 
           

        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "select * from tb_bilhete";
        $resultado = mysqli_query($conexao, $sql);
        while($umEvento = mysqli_fetch_assoc($resultado)):
        ?>
    <tr>
             
            <td><?=$umEvento['nome'];?></td>
             <td><?=$umEvento['data'];?>
             <td><?=$umEvento['local'];?>
             <td><?=$umEvento['preco'];?>
            
         
                
    </tr>
    <?php endwhile;
    mysqli_close($conexao);
    ?>
    </tbody>
</table>
<a href="form-eventos.php" class="btn btn-primary">EVENTOS</a>

<?php include "rodape.php"; ?>
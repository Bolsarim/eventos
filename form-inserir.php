<?php include "cabecalho.php"; ?>

<h2>CADASTRAR UM NOVO EVENTO</h2>
<form method="post" action="salvar.php" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="Nome" class="form-control">
    <input type="radio" name="tipo" value="Pista-Inteira" class="form-check-input"> Pista-Inteira
    <input type="radio" name="tipo" value="Pista-Meia" class="form-check-input"> Pista-Meia
    <input type="radio" name="tipo" value="Camarote" class="form-check-input"> Camarote


    <br>
    <label for="quantidade" >Quantidade de bilhete:</label>
    <input type="number" name="quantidade" id="quantidade">
    <br>
    <button class="btn btn-primary" type="submit">SALVAR EVENTO</button>
</form>


<?php include "rodape.php"; ?>
<?php include "cabecalho.php"; ?>

<h2>CADASTRAR UM NOVO EVENTO</h2>
<form method="post" action="salvar2.php?id=$id" enctype="multipart/form-data">
    
<label for="nome">Registrar Evento:</label>
<input type="text" id="nome" name="nome" required>
<br>
<label for="data">Inserir Data:</label>
<input type="date" id="data" name="data" required>
<br>
<label for="local">Inserir Local:</label>
<input type="text" id="local" name="local" required>
<br>
<label for="preco">Inserir Preço:</label>
<input type="number" id="preco" name="preco" required>

<br>
    <button class="btn btn-primary" type="submit">SALVAR EVENTO</button>
</form>

</div>
<?php include "rodape.php"; ?>
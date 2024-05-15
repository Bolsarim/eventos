<?php
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$data = $_POST['data'];
$local = $_POST['local'];
$preco = $_POST['preco'];



include "conexao.php";
$sql = "insert into tb_bilhete(nome, tipo, data, local, preco) values('$nome', '$tipo', '$data', '$local', '$preco')";

mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:vizualizar.php");
?>
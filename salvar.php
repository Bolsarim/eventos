<?php
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];


include "conexao.php";
$sql = "insert into tb_eventos(nome, tipo, quantidade) values('$nome', '$tipo', '$quantidade')";
mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:admin.php");
?>
<?php

session_start();

include 'conexaoBanco.php';

$id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "DELETE FROM projeto WHERE id= $id";
 if ($conecta->query($sql) === TRUE) {
 echo "Registro apagado com sucesso<br>";
 header('location: UsuariosCadastrados.php');
 } else {
 echo "Erro ao apagar o registro: " . $conecta->error."<br>";
 }
 $conecta->close();
?>


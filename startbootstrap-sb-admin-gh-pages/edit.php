<?php

include 'conexaoBanco.php';
$id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$email = filter_input(INPUT_GET, "email");
$senha = filter_input(INPUT_GET, "senha");
$cep = filter_input(INPUT_GET, "cep");
$endereco = filter_input(INPUT_GET, "endereco");
$bairro = filter_input(INPUT_GET, "bairro");
$localidade = filter_input(INPUT_GET, "localidade");

$link = mysqli_connect("localhost", "root", "", "projetoo_banco");

if($link){

$sql = ("UPDATE projeto SET nome='$nome', email='$email' senha='$senha', cep='$cep', endereco='$endereco', bairro='$bairro', localidade='$localidade'  where id='$id';" );

if($sql){
    header("Location:usuarios.php");
}else{
    die("Erro:" .mysqli_error($link));
}

}else{
    die("erro:".mysqli_error($link));
}
?>





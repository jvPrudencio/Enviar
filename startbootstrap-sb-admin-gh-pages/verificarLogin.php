<?php
session_start();
include 'conexaoBanco.php';

$email=$_POST['email_login'];
$senha=$_POST['senha_login'];

$login = "SELECT * FROM projeto WHERE email= '$email' AND senha= '$senha'";
$result= $conecta->query($login);

if($result->num_rows>0){
    $_SESSION['email_login']=$email;
    $_SESSION['senha_login']=$senha;
    header('location: paginaInicial.php');
}
else{
    session_unset();//remove todas as variáveis de sessão
    session_destroy();//destroi a sessão
    echo "<script> 
            alert('Login ou senha incorreto');
            window.location.href = 'fomularioLogin.php';
        </script>";

}


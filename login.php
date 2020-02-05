<?php
include 'db.php';

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']); #md5 implementando criptografia


$query = "SELECT * FROM usuarios WHERE USUARIO = '$usuario' AND SENHA = '$senha'";

#SQL Injection x' or 1=1 or 'x' no campo senha

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){

    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    
    header('location:index.php');
} else {


    header('location:index.php?erro');
}
<?php

session_start();
include_once('conecta.php');
include ('script/password.php');

$usuario = $_POST ['email'];
$senha = $_POST ['senha'];

$query = "SELECT * FROM usuario WHERE useremail = '$usuario'";
$bucar = mysqli_query($connection,$query) or die( mysqli_error($connection));

// Buscar Senha
$dados = mysqli_fetch_array($bucar) or die( mysqli_error($bucar));
$senhabd = $dados['senhauser'];

$senhaverificada = md5($senha);

// Verifica se existe o email no banco

$linha = mysqli_affected_rows($connection);

if($linha == 1){

    if($senhabd == $senhaverificada){
        $_SESSION['useremail'] = $usuario;
        header("Location: index.php");
    }   
    else {
       header('Location: login.php?msg=1');
    }

} else {
    header('Location: login.php?msg=2');
}

?>



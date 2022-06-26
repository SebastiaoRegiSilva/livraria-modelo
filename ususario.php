<?php

include_once('conecta.php');

include 'script/password.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

/*
test 

echo "Email: $usuario <br>";
echo "Nivel: $nivel <br>";
echo "Senha: $senha <br>";
*/


$query = "INSERT INTO usuario (useremail,senhauser,permissao) VALUES ('$email',md5('$senha'),'$nivel')";
$query_run = mysqli_query($connection, $query);
$teste = mysqli_affected_rows($connection);

     
<?php
    include('conecta.php');
    require_once("cabecalho.php");
    session_start();
    if(!isset($_SESSION['useremail']) == true)
    {
      unset($_SESSION['login.php']);

      header('Location: login.php');
    }

    $logado = $_SESSION['useremail'];
    
    $sql = "SELECT * FROM usuario WHERE useremail = '$logado' ";
    $buscar = mysqli_query($connection,$sql);
    $dados = mysqli_fetch_array($buscar);

    $id = $dados['id'];
    $usuario = $dados['useremail'];
    $senha = $dados['senhauser'];
    $niveluser = $dados['permissao'];

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livraria Roma</title>
</head>
<body>
          <?php
            if ($niveluser == 3) { ?>
          <h1>Bem Vindo á Livraria você está conectado como ADM</h1>
          <?php } ?>
          <?php
            if ($niveluser == 2) { ?>
          <h1>Bem Vindo á Livraria você está conectado como MODERADOR</h1>
          <?php } ?>
          <?php
            if ($niveluser == 1) { ?>
          <h1>Bem Vindo á Livraria você está conectado como USER</h1>
          <?php } ?>
  
</body>
</html>


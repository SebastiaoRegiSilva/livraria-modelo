<?php 

	include_once('conecta.php');

    $sql = "SELECT * FROM usuario";
    $buscar = mysqli_query($connection,$sql);
    $dados = mysqli_fetch_array($buscar);

    $id = $dados['id'];
    $usuario = $dados['useremail'];
    $senha = $dados['senhauser'];
    $niveluser = $dados['permissao'];
	
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/loja.css" rel="stylesheet">
	</head>
	<body>
		<header>
			
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="index.php">Livraria Roma</a></li>
				<?php
            	if ($niveluser === 3) { ?>
				<li role="presentation"><a href="formulario-livro.php">Cadastro de Livros</a></li>
				<li role="presentation"><a href="cadastra_user.php">Cadastro de Usuários</a></li>
				<?php } ?>
				<li role="presentation"><a href="lista-livro.php">Lista Livros</a></li>
				<?php
            	if ($niveluser === 3) { ?>
				<li role="presentation"><a href="lista-usuario.php">Lista Usuários</a></li>
				<?php } ?>
				<li role="presentation"><a href="formulario-busca.php">Busca de Livros</a></li>
				<?php
				if ($niveluser == 2) { ?>
				<li role="presentation"><a href="formulario-emprestimo.php">Empréstimo</a></li>
				<?php } ?>

				<?php
				if ($niveluser === 1) { ?>
				<li role="presentation"><a href="formulario-emprestimo.php">Solicita Empréstimo</a></li>
				<?php } ?>
				<li role="presentation"><a href="#">Sobre</a></li>
				<form action="logout.php" method="POST"> 
				<div class="card-footer py-0">
					<button type="submit" name="logout_btn" class="btn btn-danger">Deslogar</button>
				</div>
				</form>
				
			</ul>
		</header>
		<div class="container">
			<div class="principal">
				

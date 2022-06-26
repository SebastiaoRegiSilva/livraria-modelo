<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");

?>

	<?php if ($niveluser >= 1) { ?>
<?php 
	if(array_key_exists("removido", $_GET) && $_GET == true){ ?>
		<div class="alert alert-success" role="alert">Livro Removido com sucesso.</div>
	<?php } ?>
	<table class="table table-striped table-bordered">
		<tr>
			<td>Nome do Livro</td>
			<td>Nome do Autor</td>
			<td>Editora</td>
			<td>ISBM</td>
			<td>Sinopse</td>
			<td>Preço</td>
			<?php
            	if ($niveluser >= 2) { ?>
			<td>Alterar</td>
			<?php } ?>
			<?php
            	if ($niveluser == 3) { ?>
			<td>Deletar</td>
			<?php } ?>
			<?php
            	if ($niveluser >= 2) { ?>
			<td>Empresta</td>
			<?php } ?>
		</tr>

<?php

	$livro = listaLivro($connection);
	
	foreach($livro as $l){ ?>
	
		<tr>
			<td><?=$l['nomeLivro']; ?></td>
			<td><?=$l['nomeAutor']; ?></td>
			<td><?=$l['editora']; ?></td>
			<td><?=$l['isbm']; ?></td>
			<td><?=$l['sinopse']; ?></td>
			<td>R$ <?=$l['valor']; ?></td>
			<?php
            	if ($niveluser >= 2) { ?>
			<td><a class="btn btn-default" href="altera-livro-formulario.php?id=<?=$l['id']?>">Alterar</a></td>
			<?php } ?>
			<?php
            	if ($niveluser == 3) { ?>
			<td>
				<form action="remove-livro.php" method="post" >
					<input type="hidden" name="id" value="<?=$l['id']?>">
					<button type="submit" class="btn btn-danger">Deletar</button>
				</form>
			</td>
			<?php } ?>
			<?php
            	if ($niveluser >= 2) { ?>
			<td>
				<form action="adiciona-emprestimo.php" method="post">
					<input type="hidden" value="<?=$l['id']?>" name="id">
					<button type="submit" class="btn btn-default">Emprestar</button>
				</form>
			</td>
			<?php } ?>
		</tr>
	
	<?php } ?>
	</table>


	 <?php }else{ ?>
 		<div class="alert alert-danger" role="alert">Para usar esta funcionalidade você precisa estar logado.</div>
 	<?php } ?>



<?php require_once("rodape.php"); ?>
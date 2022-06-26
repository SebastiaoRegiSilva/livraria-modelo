<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");

	$id = $_GET['id'];
	$livro = buscaLivro($connection, $id);
?>

	<form action="altera-livro.php" method="POST" class="form-horizontal">
		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Nome do livro</label>
			<div class="col-sm-10">
			<?php

				include('conecta.php');
				$query = "SELECT * FROM livro WHERE id= $id ";
				$buscar = mysqli_query($connection,$query);
				while ($dados = mysqli_fetch_array($buscar)){

					$id = $dados['id'];
					$nome = $dados['nomeLivro'];
					$nomeautor = $dados['nomeAutor'];
					$isbm = $dados['isbm'];
					$editora = $dados['editora'];
					$sinopse = $dados['sinopse'];
					$preco = $dados['valor'];

				
				}

				?>
				<input type="hidden" name="nome" ">
				<input type="text" class="form-control" id="inputName" name="nome" placeholder="Nome do Livro" value="<?php echo $nome ?>">
			</div>
		</div>

		<div class="form-group">
		<input type="hidden"> 
			<div class="col-sm-10">
				<input type="hidden" class="form-control" id="inputId" name="id" placeholder="ID" value="<?php echo $id ?>">
			</div>
		</div>

		<div class="form-group">
		<input type="hidden" id="id"> 
			<label for="inputName" class="col-sm-2 control-label">Nome do Autor</label>
			<div class="col-sm-10">
				
				<input type="text" class="form-control" id="inputName" name="nomeautor" placeholder="Nome do Livro" value="<?php echo $nomeautor ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">ISBM</label>
			<div class="col-sm-10">
				
				<input type="text" class="form-control" id="inputName" name="isbm" placeholder="Nome do Livro" value="<?php echo $isbm ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Editora</label>
			<div class="col-sm-10">
				
				<input type="text" class="form-control" id="inputName" name="editora" placeholder="Nome do Livro" value="<?php echo $editora ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="textArea" class="col-sm-2 control-label">Sinopse</label>
			<div class="col-sm-10">
				<textarea name="sinopse" class="form-control" id="textArea" value="<?php echo $sinopse ?>" placeholder="Digite a sinopse do livro"><?php echo $sinopse ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPreco" class="col-sm-2 control-label">Preço R$</label>
			<div class="col-sm-10">
				<input type="number" name="valor" class="form-control" id="inputPreco" placeholder="Digite o preço" value="<?php echo $preco ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Alterar livro</button>
			</div>
		</div> 
	</form>



<?php require_once("rodape.php"); ?>
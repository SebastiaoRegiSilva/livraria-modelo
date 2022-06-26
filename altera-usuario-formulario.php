<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");

	$id = $_GET['id'];
	$usuario = buscaUsuario($connection, $id);
?>

	<form action="alterar-user.php" method="post" class="form-horizontal">
	
		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Nome do Usuário</label>
			<div class="col-sm-10">
			<?php
				include('conecta.php');
				$query = "SELECT * FROM usuario WHERE id= $id ";
				$buscar = mysqli_query($connection,$query);
				while ($dados = mysqli_fetch_array($buscar)){

					$id = $dados['id'];
					$nome = $dados['useremail'];
					$senha = $dados['senhauser'];
					$nivel = $dados['permissao'];
					$telefone = $dados['telefone'];

				}

				?>
			<input type="text" class="form-control" id="inputName" name="nome" placeholder="Nome complero do usuário" value="<?php echo $nome ?>">
			</div>
		</div>

		<div class="form-group">
		<input type="hidden"> 
			<div class="col-sm-10">
				<input type="hidden" class="form-control" id="inputId" name="id" placeholder="ID" value="<?php echo $id ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Senha do Usuário</label>
			<div class="col-sm-10">
			<input type="password" class="form-control" id="inputName" name="senha" placeholder="Senha" value="<?php echo $senha ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Nivel do Usuario</label>
			<div class="col-sm-10">
				
				<input type="text" class="form-control" id="inputName" name="nivel" placeholder="Nivel" value="<?php echo $nivel ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="inputTelefone" class="col-sm-2 control-label">Telefone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputName" name="telefone" placeholder="Telefone" value="<?php echo $telefone ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Alterar Usuário</button>
			</div>
		</div> 
	</form>


<?php require_once("rodape.php"); ?>
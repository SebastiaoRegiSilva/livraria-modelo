<?php 
	include_once('conecta.php');
	require_once("cabecalho.php"); 
?>

<?php
            	if ($niveluser == 3) { ?>
	<form action="adiciona-livro.php" method="post" class="form-horizontal">
		
	<div class="container" style="margin-top: 10px;">
		<div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Livro</label>
                    <input type="text" class="form-control form-control-alternative"
                    placeholder="Nome do Livro" name="livro" required="" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Autor</label>
                    <input type="text" class="form-control form-control-alternative"
                    placeholder="Nome do Autor" name="nome" required="" autocomplete="off">
                  </div>
                </div>
                
        </div>

		<div class="row">

        <div class="col-md-6">
			<div class="form-group">
				<label>Editora</label>
				<input name="editora" class="form-control" placeholder="Digite a sinopse do livro"></input>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>ISBM</label>
				<input name="isbm" class="form-control" placeholder="Digite a sinopse do livro"></input>
			</div>
		</div>

	</div>

	<div class="row">
        <div class="col-md-12">
			<div class="form-group">
				<label>Sinopse</label>
				<textarea name="sinopse" class="form-control" id="textArea" placeholder="Digite a sinopse do livro"></textarea>
			
			</div>
		</div>
	</div>
		<div class="row">

        <div class="col-md-12">
		<div class="form-group">
			<label>Preço R$</label>
				<input type="number" name="valor" class="form-control" id="inputPreco" placeholder="Digite o preço">
			</div>
		</div>

		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Cadastrar livro</button>
			</div>
		</div> 
	</form>

				</div>

	<?php } ?>
	
	<?php
	if ($niveluser <= 2) { ?>
 		<div class="alert alert-danger" role="alert">Para usar esta funcionalidade você precisa ser ADM.</div>
		 <?php } ?>


<?php require_once("rodape.php"); ?>
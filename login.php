<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/loja.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<header>
			
		</header>
		<div class="container">
			<div class="principal">
		<h1>Bem Vindo á Livraria</h1>
		
		<h4>Para usar o sistema faça o login.</h4>
		<form role="form" action="verificar_usuario.php" method="post" class="form-horizontal">
			<?php
                  include 'conecta.php';
                if(isset($_GET['msg'])) {

                  switch ($_GET['msg']) {
                    
                    case 1:?>
                    <div class="alert alert-danger" role="alert">
                      Sua senha está errada!
                    </div>
                      <?php  break;
                    case 2:?>
                      <div class="alert alert-danger" role="alert">
                      Seu Usuário não cadastrado.
                    </div>
                     <?php   break;
                }

                }
                
                ?>
		<div class="form-group">
			<label for="Email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="Email" placeholder="Digite seu email" name="email">
			</div>
		</div>
		<div class="form-group">
			<label for="Password" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="Password" placeholder="Digite sua senha" name="senha">
			</div>
		</div>
		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-default">Logar</button>
    		</div>
  		</div>

	</form>

	
</body>

</html>
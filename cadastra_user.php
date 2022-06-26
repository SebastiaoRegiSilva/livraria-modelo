<?php
require_once("cabecalho.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/loja.css" rel="stylesheet">
    <title>Cadastro de Usuário</title>
</head>
<body>

<?php
            	if ($niveluser == 3) { ?>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-1">
              <h3 class="mb-0">Cadastro de Usuário</h3>
            </div>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


            <div class="container" style="margin-top: 10px;">
            <form action="ususario.php" method="POST" >
              <!-- inicio -->
              <!-- Primeira linha -->
              <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control form-control-alternative"
                    placeholder="Digite um E-mail" name="email" required="" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Nivel Usuario</label>
                    <select class="form-control" name="nivel" required="" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                </div>
                

              </div>
              <!-- Segunda linha -->
              <div class="row">

                <div class="col-md-12">
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control form-control-alternative"
                    placeholder="Mínimo 6 digitos" name="password" required="" autocomplete="off">
                  </div>
                </div>
              
              </div>
              <!-- Bottun inicio-->
              <div class="card-footer py-4">
                <div style="text-align: right">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </div>  
              <!-- Bottun termino-->
              
            </form>
            </div>
            <!-- termino -->

          <script type="text/javascript">
          $("#telefone").mask("(00) 0 0000-0000"); 
          </script>


          </div>
        </div>
      </div>
      <?php } ?>

      <?php
            	if ($niveluser <= 2) { ?>
        <h3 class="mb-0">HAHA, VOCÊ NÃO PODE FICA AQUI VOLTE!</h3>

      <?php } ?>
    
</body>
</html>
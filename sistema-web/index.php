<!-- PÁGINA PRINCIPAL -->

<?php

	session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Página de Login">
    <meta name="author" content="Fábio Campêllo">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Área do Usuário</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <!-- CHAMADA DO PHP PARA DESTRUIR A SESSÃO, COMO MEDIDA DE SEGURANÇA-->
    <?php 
      unset
      ( $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNivelAcesso'],
        $_SESSION['usuarioLogin'],
        $_SESSION['usuarioSenha']);
    ?>

    <div class="container">

      <!-- FORMULÁRIO PARA ENTRADA DE DADOS -->
      <form class="form-signin" method="POST" action="validar.php">
        <h2 class="form-signin-heading text-center">Área de Login</h2>
        
        <!-- CAMPO USUÁRIO -->
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus>

        <br />

        <!-- CAMPO SENHA -->
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha" required>
        
        <!-- BOTÃO ENVIAR -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      </form>

      <p class = "text-center text-danger" >
      	
      	<?php
          
          //VERIFICA SE A VARIÁVEL GLOBAL ESTÁ VÁZIA
      		if(isset($_SESSION['loginErro'])){
      			echo $_SESSION['loginErro'];
      			unset($_SESSION['loginErro']);

      		}
       		
      	?>

      </p>	

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

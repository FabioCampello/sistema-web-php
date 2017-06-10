<?php

  session_start();
  include_once("seguranca.php");
  include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página de Login">
    <meta name="author" content="Fábio Campêllo">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Sistema Web</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body role="document">

    <!-- PÁGINAS DINÂMICAS --> 
    <?php

      include_once("menu.php");


      //VERIFICA SE A VARIÁVEL CAPTURA PELO MÉTODO $_GET CONTÉM ALGUM VALOR
    
     
      if ( isset( $_GET['link'] ) ){

      $link = $_GET["link"];
      
    }
      
      $pag[1] = "bem_vindo.php";
      $pag[2] = "listar_usuario.php";
      $pag[3] = "formulario_cadastro.php";
      $pag[4] = "editar_usuario.php";
      $pag[5] = "gravar_usuario.php";
      $pag[6] = "atualizar_banco.php";
      $pag[7] = "visualizar_usuario.php";
      $pag[8] = "apagar_usuario.php";
      $pag[9] = "listar_usuario_nome.php";
      $pag[10] = "listar_usuario_cpf.php";
      $pag[11] = "imprimir";

      if (isset($link)) {
          
          include $pag["$link"];
        
        }else{

          include "bem_vindo.php";

        }
      

    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

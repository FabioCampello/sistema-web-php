<!-- PÁGINA QUE CONFERE SEGUNRANÇA AO SISTEMA -->
<!-- VERIFICA SE O USUÁRIO POSSUI DADOS NA SESSÃO. SE NÃO TIVER ENCAMINHA O USUÁRIO PARA Á PÁGINA DE LOGIN -->

<?php
	if (($_SESSION['usuarioId'] == "" || $_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "" || $_SESSION['usuarioLogin'] == "" ) || $_SESSION['usuarioSenha'] == ""){

		//SE AS VARIÁVEIS DA ESTRUTURA CONDICIONAL ESTIVEREM VAZIAS TODOS OS DADOS SERÃO DESTRUIDOS, DE MODO QUE NÃO POSSAM SER RECUPERADOS
		unset
      		( $_SESSION['usuarioId'],
		      $_SESSION['usuarioNome'],
		      $_SESSION['usuarioNivelAcesso'],
		      $_SESSION['usuarioLogin'],
		      $_SESSION['usuarioSenha']);

			//MENSAGEM DE ERRO
			$_SESSION['loginErro'] = "Área restrita para usuários cadastrados!";

			//MANDA O USUÁRIO PARA A TELA DE LOGIN
			header("Location: index.php");


		}	
?>
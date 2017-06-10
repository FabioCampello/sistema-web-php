<?php


	include_once("conexao.php");
	

		$nome            = $_POST['nome'];
		$cpf             = $_POST['cpf'];
		$email           = $_POST['email'];
		$login           = $_POST['login'];
		$senha           = $_POST['senha'];
		$nivel_acesso    = $_POST['nivel_acesso_id'];
		

		//echo "$nome - $cpf - $email - $login";

		$query = "INSERT INTO usuarios(nome, cpf, email, login, senha, nivel_acesso_id, created) VALUES ('$nome', '$cpf', '$email', '$login', '$senha', 
		'$nivel_acesso', NOW())";
		$result_usuario = mysqli_query($conexao,$query);

		?>

		<!DOCTYPE html>
		  <html lang="pt-br">
		    <head>
		      <meta charset="utf-8">

		      </head>

   				 <body>

			      	<?php

						if ((mysqli_affected_rows($conexao)) != 0){

							//MENSAGEM AO USUÁRIO COFIRMANDO GRAVAÇÃO DE DADOS EM JAVASCRIPT
							echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/SmartWebsystem_ver03/adm/administrador.php?link=2'>;
							<script type=\"text/javascript\">
							
								alert(\"Usuário cadastrado com sucesso.\");

							</script>";	

						}else{

							echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/SmartWebsystem_ver03/adm/administrador.php?link=2'>;
							<script type=\"text/javascript\">
							
								alert(\"Usuário não foi cadastrado com sucesso.\");

							</script>";	
						}

					?>

	</body>

</html>

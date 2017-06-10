<?php


	include_once("conexao.php");
	
	
		$id              = $_POST['id'];
		$nome            = $_POST['nome'];
		$cpf             = $_POST['cpf'];
		$email           = $_POST['email'];
		$login           = $_POST['login'];
		$senha           = $_POST['senha'];
		$nivel_acesso    = $_POST['nivel_acesso_id'];
		
		//VERIFICANDO SE O ID ESTÁ CHEGANDO
		//echo $nivel_acesso;

		//echo "$nome - $cpf - $email - $login";

	$query = "UPDATE usuarios SET nome='$nome', cpf='$cpf', email='$email', login='$login', senha='$senha', nivel_acesso_id='$nivel_acesso', modified =  NOW() WHERE id='$id' ";
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
							
								alert(\"Usuário modificado com sucesso.\");

							</script>";	

						}else{

							echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/SmartWebsystem_ver03/adm/administrador.php?link=2'>;
							<script type=\"text/javascript\">
							
								alert(\"Usuário não foi modificado com sucesso.\");

							</script>";	
						}

					?>

	</body>

</html>

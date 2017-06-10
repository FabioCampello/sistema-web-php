<?php


	include_once("conexao.php");
	
	
		$id = $_GET['id'];
		
		//VERIFICANDO SE O ID ESTÁ CHEGANDO
		//echo $nivel_acesso;

		//echo "$nome - $cpf - $email - $login";

	$query = "DELETE FROM usuarios WHERE id=$id";

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
							
								alert(\"Usuário apagado com sucesso.\");

							</script>";	

						}else{

							echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/SmartWebsystem_ver03/adm/administrador.php?link=2'>;
							<script type=\"text/javascript\">
							
								alert(\"Usuário não foi apagado com sucesso.\");

							</script>";	
						}

					?>

	</body>

</html>

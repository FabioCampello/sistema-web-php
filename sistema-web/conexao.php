<!-- PÁGINA DE CONEXÃO COM O BANCO DE DADOS -->

<?php  

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sistemaweb";

	//criar conexão
	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

	if(!$conexao)
		die("Falha na conexão: " .mysqli_error());
	else{
				//echo "string";				
	}

?>
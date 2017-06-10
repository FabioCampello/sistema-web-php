<!-- PÁGINA QUE INSERE OS DADOS NO BANCO -->

<?php

	session_start();

	$usuariot = $_POST['usuario'];
	$senhat = $_POST['senha'];

	include_once("conexao.php");

	//VERIFIA SE OS DADOS EXISTEM NO BANCO DE DADOS 
	$result = mysqli_query ($conexao, "SELECT * FROM usuarios WHERE login = '$usuariot' AND senha = '$senhat' LIMIT 1") or die(mysql_error());;

	$resultado = mysqli_fetch_assoc($result);

	//echo "Usuário: ".$resultado['nome'];

	//SE OS DADOS DA CONSULTA FOREM DIFERENTES DO QUE ESTÃO NO BANCO O USUÁRIO RECEBERÁ UMA MENSAGEM E SERÁ DIRECIONADO À TELA DE LOGIN
	if(empty($resultado)){

		//MESNSAGEM DE ERRO
		$_SESSION['loginErro'] = "Usuario ou senha inválido!";

		//MANDA O USUÁRIO PARA A TELA DE LOGIN
		header("Location: index.php");

	}else{

		//SE OS DADOS DA CONSULTA ESTIVEREM NO BANCO, O USUÁRIO SERÁ DIRECIONADO À TELA DO ADMINISTRADOR OU À TELA DE USUÁRIO 
		$_SESSION['usuarioId']          = $resultado['id'];
		$_SESSION['usuarioNome']        = $resultado['nome'];
		$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
		$_SESSION['usuarioLogin']       = $resultado['email'];
		$_SESSION['usuarioSenha']       = $resultado['senha'];

		if ($_SESSION['usuarioNivelAcesso'] == "1") {

			//REDIRECION O USUÁRIO PARA A PÁGINA DE ADMINISTRATIVA
			header("Location: administrador.php");
		}else{
			//REDIRECION O USUÁRIO PARA A PÁGINA DE USUÁRIO
			header("Location: usuario.php");
		}

		
	}


?>
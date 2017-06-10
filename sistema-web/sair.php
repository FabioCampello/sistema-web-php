<!-- PÁGINA QUE VAI DESTRUÍR A SESSÃO  DO USUÁRIO-->

<?php

	session_start();
	session_destroy();

	//REMOVER TODAS AS INFORMAÇÕES CONTIDAS NAS VARIÁVEIS GLOBAIS
	 unset
      ( $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNivelAcesso'],
        $_SESSION['usuarioLogin'],
        $_SESSION['usuarioSenha']);

    //REDIRECIONA O USUÁRIO À PÁGINA DE LOGIN
    header("Location: index.php");  

?>
<!-- PÁGINA DE ACESSO DOS USUÁRIOS -->
<!-- INICIA UMA SEÇÃO QUE INVOCA A PÁGINA DE SEGURANÇA -->

<?php

	session_start();
	include_once("seguranca.php");

	echo "Bem vindo! Usuário<br />".$_SESSION['usuarioNome'];
?>

<br />

<a href="sair.php">Sair</a>
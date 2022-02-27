<?php
@session_start();

// inclui o arquivo de configuraчуo do sistema
include "Config/config_sistema.php";

// verifica se a variavel existir
if(isset($_SESSION['login_usuario']) and isset($_SESSION['senha_usuario'])) {
	// se existie as sessѕes coloca os valores em uma varivel
	$login_usuario = $_SESSION['login_usuario'];
	$senha_usuario = $_SESSION['senha_usuario'];
} else {
	$erro = urlencode("Vocъ nуo esta logado!");
	header("Location: ../index.php");
	exit;
}

// verifica se as variaveis estуo atribuidas
if(!(empty($login_usuario) or empty($senha_usuario))) {
	// se estiverem atribuidos vamos ver se exist o login
	$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	if(mysql_num_rows($consulta) == 1) {
		// se o usuario existir vamos verificar a senha
		if($senha_usuario != mysql_result($consulta,0,"Senha")) {
			// se a senha estс correta vamos apagar a
			// sessуo que existia mas erra a errada
			unset($_SESSION['login_usuario']);
			unset($_SESSION['senha_usuario']);
			
			$erro = urlencode("Vocъ nуo esta logado!");
			header("Location: ../index.php");
			exit;
		}
	} else {
		unset($_SESSION['login_usuario']);
		unset($_SESSION['senha_usuario']);
		
		$erro = urlencode("Vocъ nуo esta logado!");
		header("Location: ../index.php");
		exit;
	}
} else {
	// caso as sessѕes estarem vaizias
	$erro = urlencode("Vocъ nуo esta logado!");
	header("Location: ../index.php");
	exit;
}
mysql_close($conn);
?>
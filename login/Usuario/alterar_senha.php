<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

// recebe dados do formulario
$senha = $_POST['senha'];
$rep_senha = $_POST['rep_senha'];

// verifica se o usuario digitou a senha
if($senha == "") {
	echo "<font color=red><b>
		  Digite sua senha!
		  </font></b>";
	exit;
} else {
	// se ele digitou vamos comparar
	if($senha != $rep_senha) {
		echo "<font color=red><b>
			  Senha invalida!
			  </font></b>";
		exit;
	}
}

// altera a senha
$consulta = mysql_query("update dados_usuarios set Senha = '$senha' where Login = '$login_usuario'");

// verifica se foi alterada a senha
if($consulta) {
	$msg = urlencode("Senha alterada com sucesso!");
	header("Location: dados_usuario.php?msg=$msg");
	exit;
} else {
	$erro = urlencode("Não foi possivel alterar a senha!");
	header ("Location: mudar_senha.php?erro=$erro");
	exit;
}
?>
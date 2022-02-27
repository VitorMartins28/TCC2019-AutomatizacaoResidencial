<?php
include ('login/Config/config_sistema.php');

// recebe os dados do formulario
$codigo = $_POST['codigo'];

// deleta o usuario
$consulta = mysql_query("delete from lampada where ID = '".$codigo."'");

// verifica se foi excluido o usuario
if($consulta) {
	$msg = urlencode("Usuário excluido com sucesso!");
	header("Location: listar_lampada.php?msg=$msg");
	exit;
} else {
	$erro = urlencode("Não foi possivel excluir o contato!");
	header("Location: listar_lampada.php?erro=$erro");
	exit;
}
?>
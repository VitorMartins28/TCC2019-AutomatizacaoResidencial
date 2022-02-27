<?php
include ('loginConfig/config_sistema.php');

// recebe os dados do formulario
$codigo = $_POST['codigo'];

// deleta o usuario
$consulta = mysql_query("delete from sensor where ID = '".$codigo."'");

// verifica se foi excluido o usuario
if($consulta) {
	$msg = urlencode("Usuário excluido com sucesso!");
	header("Location: listar_sensor.php?msg=$msg");
	exit;
} else {
	$erro = urlencode("Não foi possivel excluir o contato!");
	header("Location: listar_sensor.php?erro=$erro");
	exit;
}
?>
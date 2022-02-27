<?php
include "../Config/config_sistema.php";

// recebe os dados do formulario
$codigo = $_GET['codigo'];

// deleta o usuario
$consulta = mysql_query("delete from dados_usuarios where Nome = '".$codigo."'");

// verifica se foi excluido o usuario
if($consulta) {
	$msg = urlencode("Usu�rio excluido com sucesso!");
	header("Location: listar_usuarios.php?msg=$msg");
	exit;
} else {
	$erro = urlencode("N�o foi possivel excluir o contato!");
	header("Location: listar_usuarios.php?erro=$erro");
	exit;
}
?>
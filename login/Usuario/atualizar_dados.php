<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

$email = htmlspecialchars($_POST['email']);
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];

// verifica o email
if($email == "") {
	echo "Digite seu email!";
	exit;
}

// verifica o pais
if($pais == "") {
	echo "Digite o país de onde você mora!";
	exit;
}

// verifica o estado
if($estado == "") {
	echo "Digite o estado de onde você mora!";
	exit;
}

// verifica a cidade
if($cidade == "") {
	echo "Digite a cidade de onde você mora!";
	exit;
}

// verifica o cep
if($cep == "") {
	echo "Digite o CEP de onde você mora!";
	exit;
}

// faz consulta para atualizar os dados
$sql = "update dados_usuarios set Email = '$email',Pais = '$pais',Estado = '$estado',Cidade = '$cidade',Cep = '$cep' where Login = '$login_usuario'";
$consulta = mysql_query($sql);

// verifica se foi atualizado os dados
if($consulta) {
	$msg = urlencode("Dados atualizados com sucesso!");
	header("Location: dados_usuario.php?msg=$msg");
	exit;
} else {
	echo "<font color=red><b>
		  Não foi possivel atualizar os dados!<br>
		  Click <a href=dados_usuarios.php>aqui</a> para retornar!
		  </font></b>";
	exit;
}
?>
<?php
//chamar conexao com o banco...
include ('login/Config/config_sistema.php');

//receber dados enviado pelo formulário preenchido pelo usuario...
$marca = $_POST['marca'];
$kwh = $_POST['kwh'];
$data = $_POST['data'];
$local = $_POST['local'];
$voltagem = $_POST['voltagem'];


//gerar o meu sql de inclusão de dados no banco...
$sql = "INSERT INTO lampada (marca, kwh, data, local, voltagem)
		VALUES ('".$marca."', '".$kwh."', '".$data."', '".$local."', '".$voltagem."')";

//aqui gera-se um teste para sabermos se o nosso dados foram cadastrados ou deu erro...
if(mysql_query($sql)){
	header('Location: index.php'); //se o cadastro foi realizado, volta-se para o formulário de cadastro
}else{
	echo "Erro ao efetuar o cadastro: ".mysql_error($conn); //se houver erro, emite o erro na tela
}

?>
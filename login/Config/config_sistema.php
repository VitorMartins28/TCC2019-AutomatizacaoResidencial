<?php


// $mysqli = new mysqli("mysql000.umbler.com", "usuario", "senha", "database");



// faz conex�o com o servidor MySQL
$local_serve = "localhost"; 	 // local do servidor
$usuario_serve = "root";		 // nome do usuario
$senha_serve = "usbw";			 // senha
$banco_de_dados = "cadastro"; 	 // nome do banco de dados

$conn = @mysql_connect($local_serve,$usuario_serve,$senha_serve) or die ("O servidor n�o responde!");

// conecta-se ao banco de dados
$db = @mysql_select_db($banco_de_dados,$conn) 
	or die ("N�o foi possivel conectar-se ao banco de dados!");

// dados do administrador s�o de estrema importancia que sem eles
// o adminstrador n�o tera acesso as paginas de administra��o
$login_admin = "admin";  			// nome do administrador
$senha_admin = "admin";						// senha administrador
$email_admin = "admin@admin.com";  // email do administrador

?>
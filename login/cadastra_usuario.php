<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="650" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="224" height="140">&nbsp;</td>
    <td width="252">&nbsp;</td>
    <td width="174">&nbsp;</td>
  </tr>
  <tr>
    <td height="24">&nbsp;</td>
    <td valign="middle">
	<font color="#FF0000"><b>
	<?php
// inclui o arquivo de configuração do sistema
include "Config/config_sistema.php";

// recebe dados do formulario
$login = htmlspecialchars($_POST['login']);
$senha = $_POST['senha'];
$rep_senha = $_POST['rep_senha'];
$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$sexo = $_POST['sexo'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$pergunta = htmlspecialchars($_POST['pergunta']);
$resposta = htmlspecialchars($_POST['resposta']);

// verifica se o usuario digitou o login
if($login == "") {
	echo "Digite seu login!";
	exit;
} else {
	// se o usuario digitou o login ele verifica
	// se esta disponivel
	$consulta = mysql_query("select * from dados_usuarios where Login = '$login'");
	$linha = mysql_num_rows($consulta);
	if($linha != 0) {
		echo "O nome de usuario que você<br>
			  Digitou já existe tente outro!";
		exit;
	}
}

// verifica se o usuario digitou a senha
if($senha == "") {
	echo "Digite sua senha!";
	exit;
} else {
	// se o usuario digitou a senha
	// vamos comparar com a contra senha
	if($senha != $rep_senha) {
		echo "Senha invalida!";
		exit;
	}
}

// verifica se o usuario digitou o nome
if($nome == "") {
	echo "Digite seu nome!";
	exit;
}

// verifica o email
if($email == "") {
	echo "Digite o seu e-mail!";
	exit;
}

// verifica o sexo
$arr_sexo = array('Masculino','Feminino');
if(!in_array($sexo,$arr_sexo)) {
	echo "Escolha o seu sexo!";
	exit;
}

// verifica a data de nascimento do usuario
// verifica o dia
if($dia == "") {
	echo "Escolha o dia que você nasceu!";
	exit;
} else {
	// verifica o mes
	if($mes == "") {
		echo "Escolha o mês que você nasceu!";
		exit;
	} else {
		// verifica o ano
		if($ano == "") {
			echo "Escolha o ano que você nasceu!";
			exit;
		} else {
			// se o Dia, o Mês e o Ano passaram
			// vamos juntalos numa so varivel
			$data_nasc = $dia."/".$mes."/".$ano;
		}
	}
}

// verifica o pais
if($pais == "") {
	echo "Digite o país onde você mora!";
	exit;
}

// verifica o estado
if($estado == "") {
	echo "Digite o estado onde você mora!";
	exit;
}

// verifica a cidade
if($cidade == "") {
	echo "Digite a cidade onde você mora!";
	exit;
}

// verifica o cep
if($cep == "") {
	echo "Digite o CEP de onde você mora!";
	exit;
}

// verifica a pergunta secreta
if($pergunta == "") {
	echo "Digite sua pergunta secreta!";
	exit;
}

// verifica a resposta secreta
if($resposta == "") {
	echo "Digite sua resposta secreta!";
	exit;
}

// faz consulta no banco para inserir os dados do usuario
$sql = "insert into dados_usuarios (ID,Login,Senha,Nome,Email,Sexo,DataNasc,Pais,Estado,Cidade,Cep,Pergunta,Resposta) values ('','$login','$senha','$nome','$email','$sexo','$data_nasc','$pais','$estado','$cidade','$cep','$pergunta','$resposta')";
$consulta = mysql_query($sql);

// verifica se o usuario foi cadastrado
if($consulta) {
	echo "<font color=green><b>
		  Você foi cadastrado com sucesso!<br>
		  Click <a href=index.php>aqui</a> para efetuar o login.
		  </font></b>";
	exit;
} else {
	echo "Não foi possivel efetuar o seu cadastro<br>
		  tente mais tarde pode ser um problema no servido!<br>
		  Click <a href=index.php>aqui</a> para ir ate a home page do sistema.";
	exit;
}
?>

    <!--DWLayoutEmptyCell-->    &nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="148">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

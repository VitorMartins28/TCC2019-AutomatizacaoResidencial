<?php
// inclui o arquivo de configuração do sistema
include "Config/config_sistema.php";
// revebe dados do formulario
$login = htmlspecialchars($_POST['login']);
$senha = $_POST['senha'];

// verifica se o usuario existe
$consulta = mysql_query("select * from dados_usuarios where Login='$login'");
$campos = mysql_num_rows($consulta);
if($campos != 0) {
// se o usuario existi verifica a senha dele
	if($senha != mysql_result($consulta,0,"Senha")) {
		echo "<font color=red><b>
			  Senha incorreta!
			  </font></b>";
		exit;
	} else {
		// estiver tudo certo vamos ver se ele é o administrador
		if($login == $login_admin) {
			// se for o login do administrador vamos verificar a senha dele
			// se é igual a do administrado
			if($senha == $senha_admin) {
				// se for o administrador vomos criar a sessão
				session_start();
				$_SESSION['login_usuario'] = $login;
				$_SESSION['senha_usuario'] = $senha;
			
				// redireciona o link para uma outra pagina
				header("Location: Admin/listar_usuarios.php");

			}
		} else {
			// se o login não for do administrado vamos criar a sessão dele
			session_start();
			$_SESSION['login_usuario'] = $login;
			$_SESSION['senha_usuario'] = $senha;
			
			// redireciona o link para uma outra pagina
			header("Location: Usuario/dados_usuario.php");
		}
	}
} else {
	echo "<font color=red><b>
		  O usuario não existe!
		  </font></b>";
	exit;
}
?>
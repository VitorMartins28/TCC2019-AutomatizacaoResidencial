<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sortcut icon" href="assets/img/logo.png" type="image/x-icon" />
        <title>Pergunta secreta</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?=12">
        <link rel="stylesheet" href="assets/css/style.css?verson=12">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body background="assets/img/backgrounds/fundo.png">
    <img src="assets/img/55.png">
 <form action="mostrar_senha.php" method="post" enctype="multipart/form-data" name="formmostar">
 <nav  style="background-color:#5C795C;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="mdi mdi-menu"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="../../index.php" class="style2">Home</a></li>
            <li><a href="lembrar_senha.php" class="style2">Voltar</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>

                        <h3 class="modal-title" id="modal-login-label"><a href="index.php" class="style7">Pergunta Secreta</a></h3>
                    </div>

<br>

<div class="container-fluid">
    <!-- Second navbar for categories -->



<?php
// inclui o arquivo de configura��o do sistema
include "../Config/config_sistema.php";

// recebe dados do formulario
$login = htmlspecialchars($_POST['login']);

// faz consulta no banco de dados
$consulta = mysql_query("select * from dados_usuarios where Login = '$login'");

// imprime a pergunta do usuario
while($linha = mysql_fetch_object($consulta)) {
echo "<br><h3 align='center'>".$linha->Pergunta."?</h3>";
}
?>
                    
                    <div class="modal-body">
                        
                      
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">Resposta</label>
                                <input type="text" name="resposta" id="resposta" placeholder="resposta">     
                                <i class="mdi mdi-file-document-box-outline"></i>
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">Login</label>
                                <input type="text" name="login" id="login" placeholder="Login">
                                <i class="mdi mdi-account"></i>
                            </div>
                            </div>
                            
                            <button type="submit" name="mostrar" value="Mostrar" id="mostrar" class="btn1">Mostrar</button>
                            
                        
                        
                    </div>
                    
                </div>
            </div>
        <!--</div>-->
</form>
<br>
<div class="footers">
            System Home Security © 2019</div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sortcut icon" href="assets/img/backgrounds/logo.png" type="image/x-icon" />

        <title>Cadastro de Usuários</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css?verson=12">
        <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?=12">


    </head>

    <body background="assets/img/backgrounds/fundo.png">
    <img src="assets/img/backgrounds/55.png">

    <div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
    <nav style="background-color:#5C795C;">
    <div class="container-fluid">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="mdi mdi-menu"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="a1" href="Admin/total_usuarios.php">Total de cadastros <span class="sr-only">(current)</span></a></li>
        <li><a class="a1" href="../index.php">Voltar para o Login</a></li>
        <li><a class="a1" href="Admin/listar_usuarios.php">Lista de usuários</a></li>
      </ul>   
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>

      <form action="cadastra_dispositivo.php" method="post" enctype="multipart/form-data" name="formcadastro">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                     <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                  </button>
                    <h3 class="modal-title" id="modal-login-label" style="color:white;">Cadastro de Usuários</h3>                     
                </div>
                    
                    <div class="modal-body">
                    <br>
                    <h4>Insira os dados do dispositivo para efetuar o cadastro</h4>
                    <br>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">codigo</label>
                                <input type="text" name="codigo" id="codigo" placeholder="Codigo">
                                <i class="mdi mdi-account"></i>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-1">dispositivo</label>
                                <input type="text" name="dispositivo" id="dipositivo" placeholder="Dispositivo" >
                                <i class="mdi mdi-key"></i>
                            </div>
                            </div>

                            <button type="submit" name="Cadastrar" value="Cadastrar" id="Cadastrar" class="btn1">Cadastrar</button>
                            <button type="reset" name="limpar" value="limpar dados" id="label13" class="btn1">Limpar Campos</button>
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        <!--</div>-->

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
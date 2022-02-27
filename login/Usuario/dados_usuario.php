<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

//faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sortcut icon" href="assets/img/logo.png" type="image/x-icon" />

        <title>Dados do Usuário</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css?verson=12">
        <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?=12">

     
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body background="assets/img/backgrounds/fundo.png">
    <img src="assets/img/backgrounds/55.png">

      <form action="atualizar_dados.php" method="post" enctype="multipart/form-data" name="formatualizar">
      <nav style="background-color:#5C795C;">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span  class="mdi mdi-menu"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
while($linha = mysql_fetch_object($consulta)) {
  echo "<b class='nome' >Olá ".$linha->Login."!</b>";
  
?>
        </div> 

    




          <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="mudar_senha.php" >Mudar senha</a></li>
            <li><a href="../logout.php" >Voltar ao Login</a></li>
            <li><a href="controle.php" >Controle</a></li>
            <li><a href="grafico_ok/chama_grafico.php" >Consumo</a></li>
          </ul>
        </div> <!--/.navbar-collapse -->
      </div><!-- /.container -->
   </nav> <!--   /.navbar -->
      
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>

                        <h3 class="modal-title" id="modal-login-label"><a href="index.php" class="style7">Dados do Usuários</a></h3>
                    </div>
                    
   <br>                 

<div class="container-fluid">
    <!-- Second navbar for categories -->
 
 
    <br>
<br>
       <p align="center" class="aten"><b><span > ATENÇÃO </span> <span>Altere apenas os dados que você dezeja modificar!</span> </b></p>
                    <div class="modal-body">
                        
                      

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">E-Mail</label>
                                <input type="text" name="email" id="label2" placeholder="E-Mail" class="in"  value="<?php echo $linha->Email;?>">
                                <i class="mdi mdi-email"></i>
                            </div>
                            </div>
                          

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">País</label>
                                <input type="text" name="pais" id="label3" placeholder="País"  value="<?php echo $linha->Pais;?>">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">Estado</label>
                                <input type="text" name="estado" id="label4" placeholder="Estado"  value="<?php echo $linha->Estado;?>">
                                <i class="mdi mdi-map"></i>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">Cidade</label>
                                <input type="text" name="cidade" id="label5" placeholder="Cidade"  value="<?php echo $linha->Cidade;?>">
                                <i class="mdi mdi-city"></i>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">CEP</label>
                                <input type="text" name="cep" id="label6" placeholder="Cep"  value="<?php echo $linha->Cep;?>">
                                <i class="mdi mdi-map-marker-radius"></i>
                            </div>
                            </div>
                          
                                                   
                            <button type="submit" name="atualizar" value="atualizar" id="atualizar" class="btn1">Atualizar</button>
                       <?php
                      }
                      ?>
                        
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
            <script src="usuario/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
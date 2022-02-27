<?php
// inclui o arquivo de validar sessão
include "../../validar_session.php";
// inclui o arquivo de configuração do sistema
include "../../Config/config_sistema.php";

$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="sortcut icon" href="assets/img/backgrounds/logo.png" type="image/x-icon" />

    <title>System Home Security</title>


    <!--<a href="https://br.freepik.com/fotos-vetores-gratis/menu">Menu vetor criado por freepik - br.freepik.com</a>-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?verson=12">
     
         <style>
          .atencao{
            width: 100%;
          }
         
         </style>

  </head>
  <br>
  <body background="assets/img/backgrounds/fundo.png">
    <img src="assets/img/backgrounds/55.png">

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
			<li><a href="../../../index.php" >Voltar ao login</a></li>
            <li><a href="../dados_usuario.php" >Voltar</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
      <li><a href="" data-toggle="modal" data-target="#myModal"> INFORMAÇÕES</a></li>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Informações</h3>
      </div>
      <div class="modal-body">


        <h2><?php
              // while($linha= mysql_fetch_object($consulta)) {
              //   echo "<b>Atenção ".$linha->Login.",</b>";
            ?> informações sobre o gráfico:</h2>
        <p> O sistema do gráfico foi feito para que o usuário saiba a média de consumo por KWH, sabendo que ele pode escolher dois tipos de gráfico BARRA e LINHA. Com isso o usuário poderá acompanhar o seu consumo por dia, semanas, quinzenas e meses, ele também poderá consultar o histórico dos anos, sabendo qual ele consumiu mais.</p>
        <p>Através dessas consultas ele poderá saber quanto está consumindo de energia no período escolhido.</p>
        <img src="assets/img/backgrounds/atencao.png" class="atencao">
        <p><b>* Estas consultas são apenas para que o usuário saiba aproximadamente quanto ele está consumindo, com isso não procurar bater de frente com a companhia de força. A System Home Security agradece.  *</b></p>
      </div>
    </div>
  </div>
</div>
                       </li>
                    </ul>     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <br><br>
          <div>

          <h2>
            Escolha qual modelo de gráfico deseja: 
          </h2>
          <br>
          <h4>Gráfico de consumo por kwh</h4>
          </div>
          <br><br>
              <select name="isso" onchange="location = this.value;" >
              <option >Gráfico em barra</option>
              <option value="barra_Ano.php"> Ano</option>
              <option value="barra_Dqs.php"> DQS</option>
              <option value="barra_Mes.php"> Mês</option>
              </select>

            <select name="isso" onchange="location = this.value;" >
            <option >Gráfico em Linha</option>
            <option value="line_Ano.php"> Ano</option>
            <option value="line_Dqs.php"> DQS</option>
            <option value="line_Mes.php"> Mês</option>
            </select>

                <br><br>
                <br><br>
            <div class="footers">
            System Home Security © 2019</div>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!--<script src="assets/js/jquery.backstretch.min.js"></script>-->
        <!--<script src="assets/js/scripts.js"></script>-->

				<script src="js/index.js"></script>


  </body>
</html>
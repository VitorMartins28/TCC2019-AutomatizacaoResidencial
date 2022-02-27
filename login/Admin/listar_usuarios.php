<?php
// inclui o arquivo de validar sessão
include "../validar_session.php";
// inclui o arquivo de configuração do sistema
include "../Config/config_sistema.php";

 error_reporting(0);
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">


    <title>System Home Security</title>



    <!--<a href="https://br.freepik.com/fotos-vetores-gratis/menu">Menu vetor criado por freepik - br.freepik.com</a>-->
    <link rel="sortcut icon" href="assets/img/backgrounds/logo.png" type="image/x-icon" /> 
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css?verson=12">
    <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?verson=12">
  </head>

		<body background="assets/img/backgrounds/fundo.png">
		  <img src="assets/img/backgrounds/55.png">
				<div class="container-fluid">
				  <div class="row">
          <form action="deletar_usuario.php" method="POST" enctype="multipart/form-data">

				    <div class="col-md-12">
				      <nav style="background-color:#5C795C;">
				        <!-- <div class="container-fluid"> -->
					      <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="mdi mdi-menu"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
						      </button>
                  <a class="navbar-brand" href="#"></a>
					      </div>
					      
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav">
									  <li> <a class="a1" href="total_usuarios.php">Total usuario <span class="sr-only">(current)</span></a></li>
										<li> <a class="a1" href="../../index.php">Voltar para o Login</a></li>
										<li> <a class="a1" href="../cadastro.php">Cadastro de usuários</a></li>
                    <li> <a class="a1" href="../cadastra_dispositivo.php">Cadastro de dispositivo</a></li>
          </form>
                    <form action="" method="post" class="navbar-form navbar-left">
                      <div class="form-group">
                        <input type="text" name="buscar">
                        <button class="btn1" type="submit" name="enviar" value="orocurar" title="pesquisar"><i class="mdi mdi-magnify"></i></button>
                      </div>
                    </form>
									</ul>
                </div>
						 	</nav>
					  </div>
				  </div>
				</div>
	

        <form action="cadastra_usuario.php" method="POST" enctype="multipart/form-data" name="formcadastro">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-login-label" style="color:white;">Lista de Usuarios</h3>
              </div>
        </form>
              <div class="modal-body">
                  <br>
                <h4>Abaixo contém todos os usuários cadastrados:</h4>
                  <br>

                    
	              <div class="row">
						      <table class="table table-responsive">
						        <thead>
                      <tr>
                        <th>Login</th>
                        <th>Nome</th>
                        <th>E-Mail</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Excluir</th>
                      </tr>
							      </thead>
	
							      <tbody>
                                
                      <?php
                        // faz consulta no banco de dados
                        $buscar_usuario = $_POST['buscar'];
                        $sql_listar_usuario = mysql_query("select * from dados_usuarios  where Nome LIKE '%$buscar_usuario%'");                    
                        //$total_usuario = mysql_num_rows($sql_listar_usuario);
                        while($resultado_ususario = mysql_fetch_array($sql_listar_usuario)){
                          $Login = $resultado_ususario['Login'];
                          $Nome = $resultado_ususario['Nome'];
                          $Email = $resultado_ususario['Email'];
                          $Cidade = $resultado_ususario['Cidade'];
                          $Estado = $resultado_ususario['Estado'];
                      ?>

                      <tr >
                        <td><?php echo $Login;?> </td>
                        <td><?php echo $Nome;?> </td>
                        <td><?php echo $Email;?></td>
                        <td><?php echo $Cidade;?> </td>
                        <td><?php echo $Estado;?></td>
                        <td><a href="deletar_usuario.php?codigo=<?php echo $Nome;?>" class="style2">X</a></td>								
                      </tr>
                                    
                      <?php
                        }
                      ?>
							      </tbody>
						      </table>
                </div> 
              <!-- </div>  -->
            </div>
			    </div>                   
        </form>
					


			

            <div class="footers">
            System Home Security © 2019</div>


            <script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!--<script src="assets/js/jquery.backstretch.min.js"></script>-->
        <!--<script src="assets/js/scripts.js"></script>-->


    

  </body>
</html>
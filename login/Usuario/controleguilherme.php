
<?php

if( isset($_REQUEST['num'])){
    $retorno = array();
    $retorno['msg'] = "sucesso";
    $retorno['num_recebido'] = $_REQUEST['num'];
    $retorno['acao_recebido'] = $_REQUEST['acao'];
    echo json_encode ($retorno);
    exit;
}

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
        <link rel="stylesheet" href="assets/css/controle.css">
        <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?verson=12">

     

  </head>

  <body background="assets/img/backgrounds/fundo.png">

    <?php

// $conexaoArduino = fopen("COM3", "w");//abre conexao
// sleep(1);//tempo

// /*
// if ($_REQUEST["lampada"] == "acender") {
//   $acao = "1";
// }else if ($_REQUEST["lampada"] == "apagar") {
//   $acao = "0";
// }
// */

// switch ($_REQUEST["sala"]) {
//   case 'acender':
//      $acao = "1";
//     break;
//   case 'apagar':
//      $acao = "0";
//     break;    
// }

// switch ($_REQUEST["quarto"]) {
//   case 'acender':
//      $acao = "2";
//     break;
//   case 'apagar':
//      $acao = "0";
//     break;    
// }

// switch ($_REQUEST["cozinha"]) {
//   case 'acender':
//      $acao = "3";
//     break;
//   case 'apagar':
//      $acao = "0";
//     break;    
// }

// fwrite($conexaoArduino, $acao);//escreve na conexao
// fclose($conexaoArduino);//fecha conexao
// 
?>




 
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
  
      <li><a href="total_usuarios.php">Total de cadastros <span class="sr-only">(current)</span></a></li>
      <li><a href="../../index.php">Voltar para o Login</a></li>
      <li> <a href="../cadastro.php">Cadastro de usuários</a></li>
      </form>
      </ul>
    
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <form action="cadastra_usuario.php" method="post" enctype="multipart/form-data" name="formcadastro">
                  <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>

                        <h3 class="modal-title" id="modal-login-label" style="color:white;">Lista de usuários</h3>
                        
                    </div>
                    
                    <div class="modal-body">
                        <br>
                   <h4>Abaixo contém todos os usuários cadastrados:</h4>
                    <br>
                    <form action="controle.php" method="GET">


<div class="row">
    <div class="col-md-6">
        <table class="table">
            <thead >
                <tr>
                    <th class="center" >
                        Controle de Iluminação
                    </th>
                    <th class="center">
                        Botão
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr >
                    <td>
                        Sala
                    </td>
                    <td>
                    <button type="submit" class="btn2" style="font-size: 16px">Sala</button>                    
                    </td>
                </tr>
                <tr>
                    <td>
                        Quarto 
                    </td>
                    <td>
                    <div class="center">
                            <input type="checkbox" id="sala" class="check">  
                       </div> 
                </tr>
                <tr>
                    <td>
                        Quarto 1
                    </td>
                    <td>
                    <div class="center">
                          <input type="checkbox" id="quarto1" class="check">  

                       </div>                      
                    </td>
                </tr>
                <tr>
                    <td>
                        Cozinha
                    </td>
                    <td>
                    <div class="center">
                    <input type="checkbox" id="cozinha" class="check">  
                       </div>                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Banheiro
                    </td>
                    <td>
                    <div class="center">
                    <input type="checkbox" id="banheiro" class="check">  
                       </div>                           
                    </td>
                </tr>
                <tr>
                    <td>
                        Sala de Controle
                    </td>
                    <td>
                    <div class="center">
                       <input type="checkbox" id="" class="check">  
                       </div>                          
                    </td>
                </tr>
                <tr>
                    <td>
                        Área de Serviço
                    </td>
                    <td>
                    <div class="center">
                            <input type="checkbox">  
                       </div>                          
                    </td>
                </tr>
                <tr>
                    <td>
                        Garagem
                    </td>
                    <td>
                    <div class="center">
                            <input type="checkbox">  
                       </div>                         
                    </td>
                </tr>
                <tr>
                    <td>
                        jardim
                    </td>
                    <td>
                    <div class="center">
                            <input type="checkbox">  
                       </div>                          
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="col-md-6">
        <table class="table">
            <thead >
                <tr>
                    <th class="titulo">
                        Controle de Acesso
                    </th>
                    <th>
                        Botão
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Portão
                    </td>
                    <td>
                    <div class="center">
                            <input type="checkbox">  
                       </div>                             
                    </td>
                </tr>
                <tr>
                    <td>
                        Porta Frente
                    </td>
                    <td>
                    <div class="center">
                            <input type="checkbox">  
                       </div>
                </tr>
                <tr>
                    <td>
                        Janela Sala
                    </td>
                    <td>
                       <div class="center">
                            <input type="checkbox">  
                       </div>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</form>
		</div>
	</div>
		</div>
			

            <div class="footers">
            System Home Security © 2019</div>


            <script>
		
			
		
	</script>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!--<script src="assets/js/jquery.backstretch.min.js"></script>-->


        <script  type="text/javascript">
        $(document).ready(function(){
    
                $('#sala').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":22
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });
                    
                
        });
        </script>


    

  </body>
</html>
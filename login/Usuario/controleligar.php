
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

<?php
    // inclui o arquivo de configura��o do sistema
    include "../Config/config_sistema.php";
    $sql ="select codigo, status from dispositivo_status";
    $result = mysql_query($sql);
    $row = array();
    while($resultado = mysql_fetch_assoc($result)){
        $row[$resultado['codigo']] = $resultado['status'];
    }

    //  echo json_encode($row, JSON_NUMERIC_CHECK);
    //  exit ;
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
        <link rel="stylesheet" href="assets/css/controle.css?verson=12">
        <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?verson=12">

        <style>
            .titulo{
                color: black;
                text-align: center;
            }
            td{
              color: black;
              font-weight: bold;
              font-size: 14px;
            }
        </style>

    </head>

    <body background="assets/img/backgrounds/fundo.png">
    <!-- <img src="assets/img/backgrounds/55.png"> -->

      
        <?php

             $conexaoArduino = fopen("COM6", "w"); //abre conexao
             sleep(1); //tempo

            
            //     if ($_REQUEST["finais"] == "disp_31") {
            //         $acao = "31";
            //         }else  {
            //         $acao = "31";
            //    }
            
               
               

            switch ($_REQUEST["finais"]) {
                case 'acender':
                    $acao = 31;
                    break;
                case 'apagar':
                    $acao = 31;
                    break;    
            }

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

             fwrite($conexaoArduino, $acao); //escreve na conexao
             fclose($conexaoArduino); //fecha conexao 
        ?>

 
        <div class="container-fluid">
	        <div class="row">
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
                                <li><a href="dados_usuario.php">Dados do usuário <span class="sr-only">(current)</span></a></li>
                                <li> <a href="mudar_senha.php">Mudar senha</a></li>
                                <li><a href="grafico_ok/chama_grafico.php" >Consumo</a></li>
                                <li><a href="../../index.php">Voltar para o Login</a></li>

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div><!-- /.container-fluid -->


        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>

                    <h3 class="modal-title" id="modal-login-label" style="color:white;">Controle</h3>
                </div>
                              
                <div class="modal-body">              
                    
                    <h2 class="titulo"> Controle de Iluminação</h2>
                 
                    <form action="controle.php" method="GET">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <thead >
                                        <tr>
                                            <th class="center">Nome</th>
                                            <th class="center">Botão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sala</td>
                                            <td>
                                            <input type="checkbox" id="disp_31" class="check">  
                                            <input type="submit" name="finais" id="disp_31" value="acender" class="check">
                                            <?php print_r($acao); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quarto 1</td>
                                            <td>
                                            <input type="checkbox" id="disp_28" class="check">                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Quarto 2</td>
                                            <td>
                                            <input type="checkbox" id="disp_22" class="check">                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Cozinha 1</td>
                                            <td>
                                            <input type="checkbox" id="disp_26" class="check">                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Cozinha 2</td>
                                            <td>
                                            <input type="checkbox" id="disp_27" class="check">                                              </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="col-md-6">
                                <table class="table">
                                    <thead >
                                        <tr>
                                            <th class="center">Nome</th>
                                            <th class="center">Botão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>frente</td>
                                            <td>
                                            <input type="checkbox" id="disp_32" class="check">                                              </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lavanderia</td>
                                            <td>
                                            <input type="checkbox" id="disp_24" class="check">                                              </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>jardim 1 </td>
                                            <td>
                                            <input type="checkbox" id="disp_30" class="check">                                              </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>jardim 2</td>
                                            <td>
                                            <input type="checkbox" id="disp_29" class="check">                                              </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Banheiro</td>
                                            <td>
                                            <input type="checkbox" id="disp_25" class="check">                                              </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                        <h2 class="titulo">Controle de Acesso </h2>

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <thead >
                                        <tr>
                                            <th class="center">Nome</th>
                                            <th class="center">Botão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Portão</td>
                                            <td>
                                            <input type="checkbox" id="disp_42" class="check">                                              </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Porta Frente</td>
                                            <td>
                                            <input type="checkbox" id="disp_43" class="check">                                              </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Porta Quarto 1</td>
                                            <td>
                                            <input type="checkbox" id="disp_41" class="check">                                              </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <table class="table">
                                    <thead >
                                        <tr>
                                            <th class="center">Nome</th>
                                            <th class="center">Botão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Porta Lavanderia</td>
                                            <td>
                                            <input type="checkbox" id="disp_40" class="check">                                              </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Janela Cozinha</td>
                                            <td>
                                            <input type="checkbox" id="disp_44" class="check">                                              </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <h2 class="titulo">Controle de Segurança </h2>

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <thead >
                                        <tr>
                                            <th class="center">Nome</th>
                                            <th class="center">Botão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Travar Casa</td>
                                            <td>
                                            <input type="checkbox" id="disp_50" class="check">                                                 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form> 
                </div>
	        </div>
	    </div>
	 <!-- </div> -->
			

            <div class="footers">
                System Home Security © 2019
            </div>


            

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!--<script src="assets/js/jquery.backstretch.min.js"></script>-->
        <!--<script src="assets/js/scripts.js"></script>-->
        <script  type="text/javascript">
        $(document).ready(function(){


                <?php
                    foreach( $row as $key => $value ){
                        if( $value ) echo "$('#disp_$key').prop('checked', true);" ;
                        else         echo "$('#disp_$key').prop('checked', false);" ;

                    }
                ?>


        
                $('#sala').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":31
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#quarto1').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":28
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#quarto2').change(function(){
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

                $('#cozinha1').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":26
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#cozinha2').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":27
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#banheiro').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":25
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                
                $('#lavanderia').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":24
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                      
                $('#frente').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":32
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                }); 

                           
                $('#jardim1').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":30
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });    
                           
                $('#jardim2').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    var params = {
                        'acao': acao,
                        "num":29
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });  

               $('#portao').change(function(){
                var acao = $(this).prop ('checked') ? "Aberto" : "Fechado";
                    var params = {
                        'acao': acao,
                        "num":42
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });  

                
                $('#janela').change(function(){
                var acao = $(this).prop ('checked') ? "Aberta" : "Fechado";
                    var params = {
                        'acao': acao,
                        "num":44
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });  

                
                $('#portafrente').change(function(){
                var acao = $(this).prop ('checked') ? "Aberta" : "Fechado";
                    var params = {
                        'acao': acao,
                        "num":43
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });    

                $('#pquarto1').change(function(){
                var acao = $(this).prop ('checked') ? "Aberta" : "Fechado";
                    var params = {
                        'acao': acao,
                        "num":41
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });  
                $('#plavanderia').change(function(){
                var acao = $(this).prop ('checked') ? "Aberta" : "Fechado";
                    var params = {
                        'acao': acao,
                        "num":40
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });      
                $('#travar').change(function(){
                var acao = $(this).prop ('checked') ? "Travado" : "Destravado";
                    var params = {
                        'acao': acao,
                        "num":50
                    }
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });      
                
             
        });
        </script>

        <script>
        </script>
    </body>
</html>
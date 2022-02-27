
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
                                        <tr>
                                            <td>Acender Tudo</td>
                                            <td>
                                            <input type="checkbox" id="disp_34" class="check">                                              </td>
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
                                        <tr>
                                            <td>Motor Tudo</td>
                                            <td>
                                            <input type="checkbox" id="disp_35" class="check">                                              </td>
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
     <?php

@$conexaoArduino = fopen("COM4", "w+");//abre conexao
sleep(3);//tempo


switch (@$_REQUEST["QUARTO2"]) {
  case 'ligar':
     $led = "A";
    break;
  case 'desligar':
     $led = "a";
    break;    
}
switch (@$_REQUEST["CORREDOR"]) {
  case 'ligar':
     $led = "B";
    break;
  case 'desligar':
     $led = "b";
    break;    
}
switch (@$_REQUEST["LAVANDERIA"]) {
  case 'ligar':
     $led = "C";
    break;
  case 'desligar':
     $led = "c";
    break;    
}
switch (@$_REQUEST["BANHEIRO"]) {
  case 'ligar':
     $led = "D";
    break;
  case 'desligar':
     $led = "d";
    break;    
}

switch (@$_REQUEST["COZINHA1"]) {
  case 'ligar':
     $led = "E";
    break;
  case 'desligar':
     $led = "e";
    break;    
}
switch (@$_REQUEST["COZINHA2"]) {
  case 'ligar':
     $led = "F";
    break;
  case 'desligar':
     $led = "f";
    break;    
}
switch (@$_REQUEST["QUARTO1"]) {
  case 'ligar':
     $led = "G";
    break;
  case 'desligar':
     $led = "g";
    break;    
}
switch (@$_REQUEST["JARDIM2"]) {
  case 'ligar':
     $led = "H";
    break;
  case 'desligar':
     $led = "h";
    break;    
}
switch (@$_REQUEST["JARDIM1"]) {
  case 'ligar':
     $led = "I";
    break;
  case 'desligar':
     $led = "i";
    break;    
}
switch (@$_REQUEST["SALA"]) {
  case 'ligar':
     $led = "J";
    break;
  case 'desligar':
     $led = "j";
    break;    
}
switch (@$_REQUEST["FRENTE"]) {
  case 'ligar':
     $led = "K";
    break;
  case 'desligar':
     $led = "k";
    break;    
}



switch (@$_REQUEST["P_LAVANDERIA"]) {
  case 'ligar':
     $led = "L";
    break;
  case 'desligar':
     $led = "l";
    break;    
}
switch (@$_REQUEST["P_QUARTO"]) {
  case 'ligar':
     $led = "M";
    break;
  case 'desligar':
     $led = "m";
    break;    
}
switch (@$_REQUEST["P_GARAGEM"]) {
  case 'ligar':
     $led = "N";
    break;
  case 'desligar':
     $led = "n";
    break;    
}
switch (@$_REQUEST["P_FRENTE"]) {
  case 'ligar':
     $led = "O";
    break;
  case 'desligar':
     $led = "o";
    break;    
}
switch (@$_REQUEST["JANELA"]) {
  case 'ligar':
     $led = "P";
    break;
  case 'desligar':
     $led = "p";
    break;    
}
switch (@$_REQUEST["ACENDERTUDO"]) {
    case 'ligar':
       $led = "Q";
      break;
    case 'desligar':
       $led = "q";
      break;    
  }
  switch (@$_REQUEST["MOTORTUDO"]) {
    case 'ligar':
       $led = "R";
      break;
    case 'desligar':
       $led = "r";
      break;    
  }
switch (@$_REQUEST["SEGURANCA"]) {
  case 'ligar':
     $led = "S";
    break;
  case 'desligar':
     $led = "s";
    break;    
}

@fwrite($conexaoArduino, $led);//escreve na conexao
@fclose($conexaoArduino);//fecha conexao
?>
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


        
                $('#disp_31').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num": 'j'
                    // }
                    var params = { "SALA":acao} ;

                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#disp_28').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'g'
                    // }
                    var params = { "QUARTO1":acao} ;

                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#disp_22').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'a'
                    // }

                    var params = { "QUARTO2":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#disp_26').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'e'
                    // }
                    var params = { "COZINHA1":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#disp_27').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'f'
                    // }
                    var params = { "COZINHA2":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#disp_25').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'d'
                    // }
                    var params = { "BANHEIRO":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#disp_34').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'q'
                    // }
                    var params = { "ACENDERTUDO":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                $('#disp_35').change(function(){ 
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'R'
                    // }
                    var params = { "MOTORTUDO":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                
                $('#dis_24').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'c'
                    // }
                    var params = { "LAVANDERIA":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });

                      
                $('#disp_32').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'k'
                    // }
                    var params = { "FRENTE":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                }); 

                           
                $('#disp_30').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'i'
                    // }
                    var params = { "JARDIM1":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });    
                           
                $('#disp_29').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'h'
                    // }
                    var params = { "JARDIM2":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });  

               $('#disp_42').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'n'
                    // }
                    var params = { "P_GARAGEM":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });  

                
                $('#disp_44').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'p'
                    // }
                    var params = { "JANELA":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });  

                
                $('#disp_43').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'o'
                    // }
                    var params = { "P_FRENTE":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });    

                $('#disp_41').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'m'
                    // }
                    var params = { "P_QUARTO":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });  
                $('#disp_40').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'l'
                    // }
                    var params = { "P_LAVANDERIA":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });
                });      
                $('#disp_50').change(function(){
                var acao = $(this).prop ('checked') ? "ligar" : "desligar";
                    // var params = {
                    //     'acao': acao,
                    //     "num":'s'
                    // }
                    var params = { "SEGURANCA":acao} ;
                    // console.log($(this).prop('checked'));
                    $.post('', params, function(result){
                        console.log(result);

                    });


                    if($(this).is(':checked')){
                     $('#disp_35').attr('disabled', 'disabled');
                     $('#disp_40').attr('disabled', 'disabled');
                     $('#disp_41').attr('disabled', 'disabled');
                     $('#disp_42').attr('disabled', 'disabled');
                     $('#disp_43').attr('disabled', 'disabled');
                     $('#disp_44').attr('disabled', 'disabled');
                     }else{
                     $('#disp_35').removeAttr('disabled');
                     $('#disp_40').removeAttr('disabled');
                     $('#disp_41').removeAttr('disabled');
                     $('#disp_42').removeAttr('disabled');
                     $('#disp_43').removeAttr('disabled');
                     $('#disp_44').removeAttr('disabled');
                   }  	
                });      
                
             
        });
        </script>

        <script>
        </script>
    </body>
</html>
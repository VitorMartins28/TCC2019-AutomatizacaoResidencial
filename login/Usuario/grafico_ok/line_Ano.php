<?php

error_reporting(0);

$dataInicial = $_REQUEST['data_inicial'] ;
$dataFinal   = $_REQUEST['data_final'] ;

function dataPT($month){
    
  switch($month){
    case "January": $month = "Janeiro"; break;
    case "February": $month = "Fevereiro"; break;
    case "March": $month = "Março"; break;
    case "April": $month = "Abril"; break;
    case "May": $month = "Maio"; break;
    case "June": $month = "Junho"; break;
    case "July": $month = "Julho"; break;
    case "August": $month = "Agosto"; break;
    case "September": $month = "Setembro"; break;
    case "October": $month = "Outubro"; break;
    case "November": $month = "Novembro"; break;
    case "December": $month = "Dezembro"; break;
    default: $month = "Unknown"; break;
  }

  return $month ;
  }

  $connect = mysqli_connect("mysql465.umbler.com", "system", "system2019", "systemsecurity");  

  $query ="
    SELECT SUM(kwh) kwh,
      MONTH(DATA) AS mes,
      DATE_FORMAT(DATA, '%Y') AS data_completa,
      DATE_FORMAT(DATA, '%M') AS mes_extenso
      from lampada
      WHERE DATE_FORMAT(`data`, '%Y-%m') BETWEEN '" . $dataInicial . "' AND '" . $dataFinal . "'
      group BY data_completa, mes
      order BY  mes, data_completa"; 

    $arrayRsQuery2 = mysqli_query($connect, $query);

     $arrayRsQuery = array ();
     while ($row = $arrayRsQuery2->fetch_assoc()) {
        $arrayRsQuery[] = $row ;
  }

  // select de colunas
    $query2 = "
      SELECT DISTINCT data_completa
        FROM (
        SELECT SUM(kwh) kwh,
        DATE_FORMAT(DATA, '%Y') AS data_completa,
        DATE_FORMAT(DATA, '%m/%M') AS mes
        from lampada
        WHERE DATE_FORMAT(`data`, '%Y-%m') BETWEEN '" . $dataInicial . "' AND '" . $dataFinal . "'
        group BY data_completa, mes
        order BY  data_completa
       ) aux ";

    $arrayColunaRs = mysqli_query($connect, $query2);

    $arrayColuna = array( ) ;
    $arrayColuna[] = "mes" ;
    while ($row = $arrayColunaRs->fetch_assoc()) {
      $arrayColuna[] = "(" . $row["data_completa"] . ")"  ;
    }

  $arrayValues = array( ) ;

  $arrayAno = array( ) ;
  foreach( $arrayRsQuery as $key => $value ){
    if( !in_array( $value["data_completa"], $arrayAno ) ){
      $arrayAno[] = $value["data_completa"] ;
    }
  }

  reset( $arrayRsQuery ) ;
  $arrayMes = array( ) ;
  foreach( $arrayRsQuery as $key => $value ){
    if( !in_array( $value["mes_extenso"], $arrayMes ) ){
      $arrayMes[] = dataPT( $value["mes_extenso"] ) ;
    }
  }

  $arrayValues = array( ) ;
  foreach( $arrayMes as $key => $value ){
    foreach( $arrayAno as $key2 => $value2 ){
      $arrayValues[$value][$value2] = 0 ;
    }
  }

  //preenchimento do array com os respectivos valores por mes/ano
  $arrayValuesPreenchidos = array( ) ;
  foreach( $arrayMes as $keyMes => $valueMes ){
    reset( $arrayAno ) ;
    foreach( $arrayAno as $keyAno => $valueAno ){
      reset( $arrayRsQuery ) ;
      foreach( $arrayRsQuery as $key => $value ){
        if( $value['data_completa'] == $valueAno && dataPT( $value['mes_extenso'] ) == $valueMes ){
          $arrayValuesPreenchidos[$valueMes][$valueAno] = $value['kwh'] ;
        }
      }
      if( $arrayValuesPreenchidos[$valueMes][$valueAno] == "" ){
        $arrayValuesPreenchidos[$valueMes][$valueAno] = 0 ;
      }
    }
  }
  
  $arrayGrafico = array( ) ;
  $arrayGrafico[] = $arrayColuna ;

  foreach( $arrayValuesPreenchidos as $key => $value ){
    $arrayListaMensal = array( ) ;
    $arrayListaMensal[] = $key ;
    foreach( $value as $valueMes ){
      $arrayListaMensal[] = $valueMes ;
    }

    $arrayGrafico[] = $arrayListaMensal ;
  }

  $jsongrafico = json_encode( $arrayGrafico, JSON_NUMERIC_CHECK) ;


?> 

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <title>System Home Security</title>

    <link rel="sortcut icon" href="assets/img/backgrounds/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?verson=12">
	  <link rel="stylesheet" href="css/style.css">

    <style>
      .graficochart {
        width: 100%; 
        min-height: 500px;
      }
      .row {
        margin:0 !important;
      }
    </style>


    <style type="text/css">
        #warning-message { display: none; }
        @media only screen and (orientation:portrait ) and (max-width: 600px){
            #wrapper { display:none; }
            #warning-message { display:block; }
        }
        @media only screen and (orientation:landscape) {
            #warning-message { display:none; }
        }
    </style>



  </head>

    <body background="assets/img/backgrounds/fundo.png">
      <img src="assets/img/backgrounds/55.png">

     

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      var jsonChart = <?php echo $jsongrafico?> ;
      console.log( jsonChart ) ;

      function drawChart() {
        var data = google.visualization.arrayToDataTable( jsonChart );

        var options = {
          curveType: 'function',
          legend: { position: 'bottom' },
          colors: ['red','blue','black'],
          hAxis: {title: 'Mes', titleTextStyle: {color: 'red'}},
          vAxis: { title: 'kwh', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

 

      <nav style="background-color:#5C795C;">
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
          <li><a href="line_Dqs.php" >Gráfico Quinzenal</a></li>
          <li><a href="line_Mes.php">Gráfico Mensal</a></li>
          <li><a href="chama_grafico.php">Voltar</a></li>
          <li><a href="../dados_usuario.php" >Voltar ao Dados de usuário</a></li>    
          </ul>
        </div>
      </nav>
      <div id="wrapper">

      <br><br>

      <?php 
        $origDate = $dataInicial;
        $origDate2 = $dataFinal;  
        $newDate = date("Y", strtotime($origDate));
        $newDate2 = date("Y", strtotime($origDate2));
      ?>


      <div class="container-fluid">
        <form action="" method="POST">
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <label>Data Inicial</label> 
              <input type="date" id="data_inicial" name="data_inicial" class="form-control" value= <?php echo $origDate; ?>> 
            </div>
            <div class="col-md-6 col-xs-12">
              <label>Data Final</label> 
              <input type="date" id="data_final" name="data_final" class="form-control" value= <?php echo $origDate2; ?>>
            </div>
          </div>
          <button type="submit" class="btn1" title="Filtrar"> <span class="mdi mdi-filter" title="Filtrar"></span></button>
        </form>

          <div class="row">
            <div class="col-12 offset-md-4 text-center">
              <h3>Gráfico de consumo por KWH </h3>
              <h5>Consumo anual</h5>
            </div>
          </div>

          <div class="col-md-12">
            <div id="curve_chart" class="graficochart"></div>
          </div>
      </div>

    
      <div class="footers">
        System Home Security © 2019
      </div>

      
      </div>
      <div id="warning-message">
      <br>
      <br>
      <br><br>
         <img src="rot.gif" alt=""  height="222" width="220"/>
      </div>
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
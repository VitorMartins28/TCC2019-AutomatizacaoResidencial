<?php 
  error_reporting(0);

  $dataInicial = $_REQUEST['data_inicial'] ;
  $dataFinal   = $_REQUEST['data_final'] ;

  $connect = mysqli_connect("mysql465.umbler.com", "system", "system2019", "systemsecurity"); 
  // or die ("Error " . mysqli_error($connection));

  $sql = "
    SELECT SUM(kwh) kwh, DATE_FORMAT(DATA, '%d/%m/%Y') data_ 
      from lampada
      WHERE DATE_FORMAT(`data`, '%Y-%m-%d') BETWEEN '" . $dataInicial . "' AND '" . $dataFinal . "'
      group BY data_
      order BY data_
  "; 

  $result = mysqli_query($connect, $sql) or die("Error in Selecting " . mysqli_error($connection));


  $rows = array();
  $flag = true; 
  $table = array(); 
  $table['cols'] = array( 
    array('label' => 'Startup', 'type' => 'string'),
    array('label' => 'consumo', 'type' => 'number'),
  );
     
 
    $rows = array();
      while($r =mysqli_fetch_assoc($result)){
        $temp = array();
        $temp[] = array('v' => (string) $r['data_']); 
        $temp[] = array('v' => (int) $r['kwh']);
        $rows[] = array('c' => $temp);
      }
     
    $table['rows'] = $rows;
    $jsonTable = json_encode($table);

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

  </head> 

    <body background="assets/img/backgrounds/fundo.png">
    <img src="assets/img/backgrounds/55.png">

    <nav style="background-color:#5C795C;">
      <div class="container-fluid">
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
            <li><a href="line_Ano.php">Gráfico Anual</a></li>
            <li><a href="line_Mes.php">Gráfico Mensal</a></li>
            <li><a href="chama_grafico.php">Voltar</a></li>
            <li><a href="../dados_usuario.php">Voltar ao Dados de usuário</a></li>    
          </ul>
        </div>
      </div>
    </nav>
    <br><br>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
      google.setOnLoadCallback(drawChart);

      function drawChart(){
        var data = new google.visualization.DataTable(<?=$jsonTable?>);
   
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' },
          colors: ['red','blue','black'],
          hAxis: {title: 'Mes', titleTextStyle: {color: 'red'}},
          vAxis: { title: 'kwh', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.LineChart(document.getElementById('line_chart'));
        chart.draw(data, options);
  
   }
  </script>


      <?php 
        $origDate = $dataInicial;
        $origDate2 = $dataFinal;  
        $newDate = date("d/m/Y", strtotime($origDate));
        $newDate2 = date("d/m/Y", strtotime($origDate2));
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
            <div id="line_chart" class="graficochart"></div>
          </div>
      </div>

    
      <div class="footers">
        System Home Security © 2019
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

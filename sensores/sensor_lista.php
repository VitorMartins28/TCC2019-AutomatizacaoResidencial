<?php
// inclui o arquivo de configuração do sistema
include ('login/Config/config_sistema.php');

// faz consulta no banco de dados
$consulta = mysql_query("select * from sensor");
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<table class="table table-hover">
  <thead>
    <tr class="row100 head">
      <th>Login</th>
      <th>data</th>
      <th>local</th>
      <th>voltagem</th>
      <th>potencia</th>
      <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($linhas = mysql_fetch_object($consulta)) {
    ?>

    <tr class="row100 body">
      <td><?php echo $linhas->marca;?>&nbsp;</td>
      <td><?php echo $linhas->data;?>&nbsp;</td>
      <td><?php echo $linhas->local;?>&nbsp; </td>
      <td><?php echo $linhas->voltagem;?>&nbsp; </td>
      <td><?php echo $linhas->potencia;?>&nbsp; </td>
      <td><a href="deletar_sensor.php?codigo=<?php echo $linhas->ID;?>" class="style2">X</a></td>
    </tr>
                                  
    <?php
    }
    ?>
  </tbody>
</table>


   <!--script-->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="assets/js/jquery.backstretch.min.js"></script>-->
    <!--<script src="assets/js/scripts.js"></script>-->
    
</body>
</html>
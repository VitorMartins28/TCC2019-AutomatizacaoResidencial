<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Lâmpada</title>


 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body>

 
 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Adicionar Item</h3>
  
  <form action="cadastra_lampada.php" method="POST">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="">Marca</label>
  	  	<input type="text" class="form-control" name="marca" id="marca" placeholder="Digite o nome">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="">KW/h</label>
  	  	<input type="text" class="form-control" name="kwh" id="kwh" placeholder="Digite o valor">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="">Data</label>
  	  	<input type="text" class="form-control" name="data" id="data" placeholder="Digite a data">
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label for="">Local</label>
  	  	<input type="text" class="form-control" name="local" id="local" placeholder="Digite o local">
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label for="">Voltagem</label>
  	  	<input type="text" class="form-control" name="voltagem" id="voltagem" placeholder="Digite o voltagem">
  	  </div>
<!-- 	  <div class="form-group col-md-3">
  	  	<label for="">Campo Seis</label>
  	  	<input type="email" class="form-control" id="" placeholder="Digite o valor">
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label for="">Campo Sete</label>
  	  	<input type="email" class="form-control" id="" placeholder="Digite o valor">
  	  </div> -->
	</div>
	
	<hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" name="cadastrar" id="cadastrar" class="btn btn-primary">Cadastrar</button>
	  </div>
	</div>

  </form>
 </div>

 

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>


</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Perguntas</title>
        <link rel="shortcut icon" href="images/" type="image/x-icon">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../../css/bootstrap-theme.min.css"> 
        <link rel="stylesheet" type="text/css" href="../../../../css/style.css">       
</head>

<body>

<div id="topo">
<div class="container col-sm-8 col-sm-offset-2">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">CEADIS - Cadastro de Perguntas</h3>
  </div>
  
  <div class="panel-body">
    <div class="col-sm-10 col-sm-offset-2">
		<form name="cadastrar/doca" class="form-horizontal" action="" method="post" role="form">
		
		<div class="form-group">
				<label for="inputEmail3">Pergunta Descrição:</label>			
		</div>
		
		<div class="form-group">
			<div class="col-sm-9">
			<textarea class="form-control" rows="4"></textarea>
			</div>
		</div>
		
		<div class="form-group">
				<label for="inputEmail3">Selecione a Pesquisa:</label>			
		</div>
		
		<div class="form-group">
			<div class="col-sm-5">
				<select class="form-control">
 					 <option>Selecione</option>
 					 <option>1</option>
 					 <option>2</option>
 					 <option>3</option>
  					 <option>4</option>  				     
				</select>			
			</div>
		</div>
		
		<div class="form-group">
				<label for="inputEmail3">Escolha o Tipo:</label>			
		</div>
		
		<div class="form-group">
			<div class="col-sm-5">
				<select class="form-control">
 					 <option>Selecione</option>
 					 <option>1</option>
 					 <option>2</option>
 					 <option>3</option>
  					 <option>4</option>  				     
				</select>			
			</div>
		</div>
		
		<div class="form-group">
				<label for="inputEmail3">Categoria:</label>			
		</div>
		
		<div class="form-group">
			<div class="col-sm-5">
				<select class="form-control">
 					 <option>Selecione</option>
 					 <option>Infomação</option>
 					 <option>Operacional</option> 					  				    
				</select>			
			</div>
		</div>
		
		<div class="form-group">
				<label for="inputEmail3">Qual Status:</label>			
		</div>
		
		<div class="checkbox">
    		<label>    		     
      			 <input type="checkbox"> Ativo ?
    		</label>
  		</div>
  		<br>
		</form>
  </div>
  
  
  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10"> 
  			<button type="reset" class="btn btn-primary"><span class="glyphicon glyphicon-hand-left"></span> Voltar</button>
        	<button type="submit" name="enviar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Cadastrar</button>
  		</div>
  </div>
  
</div>
</div>
</div>
</div>

</body>
</html>
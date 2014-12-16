<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Novo tipo de Pergunta</h3>
	</div>
	<div class="panel-body">
		<form name="cadastrar/doca" class="form-horizontal" action="action/TipoPergunta.php" method="post" role="form">
			
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-1 control-label">Descrição:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="tpe_descricao" value="<?php echo($_SESSION ['cadastrar/TipoPergunta']['tpe_descricao']); ?>" id="" placeholder="Tipo de Pergunta">
				</div>
			</div>
			
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-1 control-label">Status:</label>
				<div class="col-sm-4">
					<input type="checkbox" name="tpe_status" value="<?php echo(($_SESSION ['cadastrar/TipoPergunta']['tpe_status'] == '') ? '' : 1); ?>" >					
				</div>
			</div>			
			
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-1">
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-saved"></span> Salvar
					</button>
				</div>
			</div>
			
		</form>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">cadastrar</h3>
	</div>
	<div class="panel-body">
		<form name="cadastrar/pesquisa" class="form-horizontal" action="action/Pesquisa.php" method="post" role="form">
			
			<div class="form-group">
				<label for="" class="col-sm-1 control-label">Pesquisa:</label>
				<div class="col-sm-4">
					<input type="hidden" name="pes_codigo" value="<?php  echo($_SESSION['cadastrar/Pesquisa']['pes_codigo']); ?>" >				
					<input type="text" class="form-control" name="pes_nome" value="<?php  echo($_SESSION['cadastrar/Pesquisa']['pes_nome']); ?>" id="" placeholder="Nome da pesquisa">
				</div>
			</div>				
			
			<div class="form-group">	
				<label for="" class="col-sm-1 control-label">Data Pesquisa:</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" name="pes_data" value="<?php  echo($_SESSION['cadastrar/Pesquisa']['pes_data']); ?>" id="" placeholder="dia/mes/ano">
				</div>
			</div>
			
			<div class="form-group">	
				<label for="" class="col-sm-1 control-label">Status:</label>
				<div class="col-sm-4">
					<input type="checkbox" name="pes_status" value="1" <?php echo (($_SESSION['cadastrar/Pesquisa']['pes_status'] == 1) ? 'checked' : '');  ?> >
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
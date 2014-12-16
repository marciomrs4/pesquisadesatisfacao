<?php use Ramos\core\ActionController; ?>
<!-- Inicio do Menu do Modulo -->		

	<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $config['moduloName']; ?></h3>
			</div>
			<div class="panel-body">

				<!-- Painel de ações -->

				<ul class="nav nav-pills">
					
					<li class="dropdown">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">
								<span class="glyphicon glyphicon-plus"></span> Novo
							</button>
							<button type="button" class="btn btn-primary dropdown-toggle"
								data-toggle="dropdown">
								<span class="caret"></span> <span class="sr-only">Toggle
									Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo ActionController::actionUrl()->setProjecName($configGlobal['basepath'])
																				->setUrlModulo('configuracao')
																				->setUrlAction('cadastrar/pesquisa')
																				->getUrl();
													 ?>"><span class="glyphicon glyphicon-plus"></span>
										Pesquisa</a></li>
								<li class="divider"></li>																	
								<li><a href="<?php echo ActionController::actionUrl()->setProjecName($configGlobal['basepath'])
																				->setUrlModulo('configuracao')
																				->setUrlAction('cadastrar/TipoPergunta')
																				->getUrl();
													 ?>"><span class="glyphicon glyphicon-plus"></span>
										Tipo de Perguntas</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-plus"></span>
										Perguntas</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-plus"></span>
										Lista de Resposta</a></li>
								<li class="divider"></li>
								<li><a href="#"><span class="glyphicon glyphicon-plus"></span>
										Separated link</a></li>
							</ul>
						</div>
					</li>
					
<!-- 					<li class="dropdown">
						<div class="btn-group">
						<a href="Pesquisar.php" class="btn btn-primary pull-right">
							<span class="glyphicon glyphicon-search"></span> Pesquisar
						</a>
						</div>
					</li> 
-->

					<li class="dropdown">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">
								<span class="glyphicon glyphicon-list-alt"></span> Listar
							</button>
							<button type="button" class="btn btn-primary dropdown-toggle"
								data-toggle="dropdown">
								<span class="caret"></span> <span class="sr-only">Toggle
									Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="ListarPesquisa.php"><span class="glyphicon glyphicon-list-alt"></span>
										Pesquisa</a></li>
								<li class="divider"></li>			
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Another action</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Separated link</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
				
		<!-- Fim Painel de ações / Painel do Modulo-->
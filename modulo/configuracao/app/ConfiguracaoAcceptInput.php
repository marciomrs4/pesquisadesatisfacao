<?php

namespace modulo\configuracao\app;

use Ramos\core\PostController;
use modulo\configuracao\app\entity\PesquisaEntity;

class ConfiguracaoAcceptInput extends PostController
{
	
	public function cadastrarPesquisa()
	{
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			filter_var_array($this->post,FILTER_SANITIZE_STRING);
			
			try{
			
			$pesquisaEntity = new PesquisaEntity();
			$pesquisaEntity->setPesNome($this->post['pes_nome']);
			
			}catch (\Exception $e){
				throw new \Exception($e->getMessage(), $e->getCode());
			}		
			
			
		}
		
		
		return $this;
	}
	
	
	
}
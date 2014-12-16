<?php

namespace modulo\configuracao\app;

use Ramos\core\PostController;
use modulo\configuracao\app\entity\PesquisaEntity;
use modulo\configuracao\app\model\PesquisaModel;

class ConfiguracaoAcceptInput extends PostController
{
	
	public function cadastrarPesquisa()
	{
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			filter_var_array($this->post,FILTER_SANITIZE_STRING);
			
			try{
			
			if($this->post['pes_status']){
				$this->post['pes_status'] = 1;	
			}
				
			$pesquisaEntity = new PesquisaEntity();
			$pesquisaEntity->setPesNome($this->post['pes_nome'])
							->setPesData($this->post['pes_data'])
							->setPesStatus($this->post['pes_status']);
			
			$PesquisaModel = new PesquisaModel();
			$PesquisaModel->save($pesquisaEntity);
			
			
			}catch (\Exception $e){
				throw new \Exception($e->getMessage(), $e->getCode());
			}		
			
			
		}else {
			throw new \Exception("Metho Post Invalid");
		}
		
		
		return $this;
	}
	
	
	public function alterarPesquisa()
	{
	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
				
			filter_var_array($this->post,FILTER_SANITIZE_STRING);
				
			try{

	
				$pesquisaEntity = new PesquisaEntity();
				$pesquisaEntity->setPesNome($this->post['pes_nome'])
							   ->setPesData($this->post['pes_data'])
							   ->setPesStatus($this->post['pes_status'])
							   ->setPesCodigo($this->post['pes_codigo']);
					
				$PesquisaModel = new PesquisaModel();
				$PesquisaModel->update($pesquisaEntity);
					
					
			}catch (\Exception $e){
				throw new \Exception($e->getMessage(), $e->getCode());
			}
				
				
		}else {
			throw new \Exception("Metho Post Invalid");
		}
	
	
		return $this;
	}
	
	
}
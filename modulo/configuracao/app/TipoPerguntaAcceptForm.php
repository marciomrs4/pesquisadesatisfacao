<?php

namespace modulo\configuracao\app;

use Ramos\core\PostController;
use modulo\configuracao\app\entity\TipoPerguntaEntity;
use modulo\configuracao\app\model\TipoPerguntaModel;

class TipoPerguntaAcceptForm extends PostController
{

	public function cadastrarTipoPergunta()
	{
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			filter_var_array($this->post,FILTER_SANITIZE_STRING);
			
			try {
				
				$TipoRespostaEntity = new TipoPerguntaEntity();
				$TipoRespostaEntity->setTpeDescricao($this->post['tpe_descricao'])
								   ->setTpeStatus($this->post['tpe_status']);
								   
				$TipoRespostaModel = new TipoPerguntaModel();
				$TipoRespostaModel->save($TipoRespostaEntity);
				
				
				
			} catch (\Exception $e) {
				throw new Exception($e->getMainMessage(), $e->getCode());
			}
			
		}
		
		return $this;
		
	}
	
	
	public function alterarTipoPergunta()
	{
		
	}
	
}

?>
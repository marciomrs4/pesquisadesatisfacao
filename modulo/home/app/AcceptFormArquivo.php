<?php

namespace modulo\home\app;


use Ramos\core\PostController;
use modulo\home\app\Entity\Arquivo;

class AcceptFormArquivo extends PostController
{
	
	
	public function receiverForm()
	{
		
		$arquivo = new Arquivo();

		$pdo = new \PDO('mysql:host=localhost;dbname=sga','root','q1w2e3mrs');
		
		$EntityArquivo = new \modulo\home\app\Model\Arquivo($pdo);
		
		try {
			
			$arquivo->setArqNumeracao($this->post['arq_numeracao']);

			$EntityArquivo->save($arquivo);
			
		
		} catch (Exception $e) {
			throw new \Exception($e->getMessage(),$e->getCode());
		}
		

		return $this;

	}
	
}
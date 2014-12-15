<?php

namespace modulo\home\app\Entity;

use Respect\Validation\Validator as V;

class Arquivo 
{
	
	private $arq_numeracao;

	
	public function setArqNumeracao($arq_numeracao)
	{
		

		try {
			
			v::string()->notEmpty()
					   ->email()
					   ->setName('Numeracao')
					   ->setTemplate('O campo {{name}} é obrigatório')
					   ->assert($arq_numeracao);

			
		} catch (Exception $e) {
			throw new \Exception($e->getMessage(), $e->getCode());
		}
		

	}
	
	
	public function getArqNumeracao()
	{
		return $this->arq_numeracao;
	}

}

?>
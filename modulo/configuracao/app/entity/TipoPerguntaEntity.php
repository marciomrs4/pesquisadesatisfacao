<?php

namespace modulo\configuracao\app\entity;

use Respect\Validation\Validator as V;
/**
 * @author marcio.santos
 *
 */


class TipoPerguntaEntity 
{
	
	private $tpe_codigo;
	private $tpe_descricao;
	private $tpe_status;
	

	
	public function getTpeCodigo()
	{
		return $this->tpe_codigo;
	}
	
	public function setTpeCodigo($tpe_codigo)
	{
		try{
			
		V::int()->setName('Codigo do Tipo de Pergunta')
				->setTemplate('O campo {{name}} é obrigatório')
				->assert($tpe_codigo);

				$this->tpe_codigo = $tpe_codigo;
				return $this;
				
		}catch (\Exception $e){
			throw new \Exception($e->getMessage(), $e->getCode());
		}
	}
	
	public function getTpeDescricao()
	{
		return $this->tpe_descricao;
	}
	
	public function setTpeDescricao($tpe_descricao)
	{
		try{
		V::string()->notEmpty()
				   ->setName('Descricao')
				   ->setTemplate('O campo {{name}} é obrigatório')
				   ->assert($tpe_descricao);
				   
				   $this->tpe_descricao = $tpe_descricao;

				   return $this;
				   
		}catch (\Exception $e){
			throw new \Exception($e->getMainMessage(), $e->getCode()); 
		}
	}
	
	public function getTpeStatus()
	{
		return $this->tpe_status;
	}
	
	public function setTpeStatus($tpe_status)
	{
		try{
			V::int()
			->setName('Status')
			->setTemplate('O campo {{name}} é obrigatório')
			->assert($tpe_status);
			
			$this->tpe_status = $tpe_status;
			
			return $this;
			
		}catch (\Exception $e){
			throw new \Exception($e->getMainMessage(), $e->getCode());
		}
	}
	
	
}

?>
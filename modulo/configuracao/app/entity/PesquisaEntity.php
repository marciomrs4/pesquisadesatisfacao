<?php

namespace modulo\configuracao\app\entity;

use Respect\Validation\Validator as V;
/**
 * @author marcio.santos
 *
 */


class PesquisaEntity 
{
	private $pes_codigo;
	private $pes_nome;
	private $pes_data;
	private $pes_status;

	
	public function getPesCodigo()
	{
		return $this->pes_codigo;
	}
	
	public function setPesCodigo($pes_codigo)
	{
		try{
			
		V::int()->setName('PesCodigo')
				->setTemplate('O campo {{name}} é obrigatório')
				->assert($pes_codigo);

				$this->pes_codigo = $pes_codigo;
				return $this;
				
		}catch (\Exception $e){
			throw new \Exception($e->getMessage(), $e->getCode());
		}
	}
	
	public function getPesNome()
	{
		return $this->pes_nome;
	}
	
	public function setPesNome($pes_nome)
	{
		try{
		V::string()->notEmpty()
				   ->setName('Pesquisa')
				   ->setTemplate('O campo {{name}} é obrigatório')
				   ->assert($pes_nome);
				   
				   $this->pes_nome = $pes_nome;

				   return $this;
				   
		}catch (\Exception $e){
			throw new \Exception($e->getMainMessage(), $e->getCode()); 
		}
	}
	
	public function getPesData()
	{
		return $this->pes_data;
	}
	
	public function setPesData($pes_data)
	{
		try{
			V::notEmpty()
			->date('Y-m-d')
			->setName('Data da pesquisa')
			->setTemplate('O campo {{name}} é obrigatório')
			->assert($pes_data);
			
			$this->pes_data = date('Y-m-d',strtotime($pes_data));
			
			return $this;
			
		}catch (\Exception $e){
			throw new \Exception($e->getMainMessage(), $e->getCode());
		}
	}
	
	public function getPesStatus()
	{
		return $this->pes_status;
	}
	
	public function setPesStatus($pes_status)
	{
		try{
			V::int()
			->setName('Status')
			->setTemplate('O campo {{name}} é obrigatório')
			->assert($pes_status);
			
			$this->pes_status = $pes_status;
			
			return $this;
			
		}catch (\Exception $e){
			throw new \Exception($e->getMainMessage(), $e->getCode());
		}
	}
	
	
}

?>
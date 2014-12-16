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
		V::string()->setName('Pesquisa')
				   ->setTemplate('O campo {{name}} é obrigatório')
				   ->assert($pes_nome);
		}catch (\Exception $e){
			throw new \Exception($e->getMessage(), $e->getCode());
		}
	}
	
	public function getPesData()
	{
		return $this->pes_data;
	}
	
	public function setPesData($pes_data)
	{
		try{
			V::string()
			->setName('Data da pesquisa')
			->setTemplate('O campo {{name}} é obrigatório')
			->assert($pes_data);
		}catch (\Exception $e){
			throw new \Exception($e->getMessage(), $e->getCode());
		}
	}
	
	public function getPesStatus()
	{
		return $this->pes_status;
	}
	
	public function setPesStatus($pes_status)
	{
		try{
			V::string()
			->setName('Status')
			->setTemplate('O campo {{name}} é obrigatório')
			->assert($pes_status);
		}catch (\Exception $e){
			throw new \Exception($e->getMessage(), $e->getCode());
		}
	}
	
	
}

?>
<?php

namespace modulo\configuracao\app\model;

use Ramos\core\DataBaseConnect;
use modulo\configuracao\app\entity\PesquisaEntity;
use modulo\configuracao\app\entity\TipoPerguntaEntity;

class TipoPerguntaModel extends DataBaseConnect
{

	private $TABLENAME = 'tb_tipo_pergunta';
	
	private $tpe_codigo = 'tpe_codigo';
	private $tpe_descricao = 'tpe_descricao';
	private $tpe_status = 'tpe_status';
	
	
	public function save(\modulo\configuracao\app\entity\TipoPerguntaEntity $TipoPerguntaEntity)
	{
		$query = ("INSERT INTO $this->TABLENAME 
					($this->tpe_descricao, $this->tpe_status) 
					VALUES (?,?)");
		
		try {

			$stmt = $this->conexao->prepare($query);
			
			$stmt->bindParam(1, $TipoPerguntaEntity->getTpeDescricao(),\PDO::PARAM_STR);
			$stmt->bindParam(2, $TipoPerguntaEntity->getTpeStatus());
			
			$stmt->execute();
			
			return $this->conexao->lastInsertId();
			
		} catch (\PDOException $e) {
			throw new \PDOException($e->getMessage(), $e->getCode());
		}
		
	}
	
	public function update(\modulo\configuracao\app\entity\TipoPerguntaEntity $TipoPerguntaEntity)
	{
		$query = ("UPDATE $this->TABLENAME
				SET $this->tpe_descricao = ?,
					$this->tpe_status = ?
				WHERE $this->tpe_codigo = ?");
	
		try {
	
		$stmt = $this->conexao->prepare($query);
			
		$stmt->bindParam(1, $TipoPerguntaEntity->getTpeDescricao(),\PDO::PARAM_STR);
		$stmt->bindParam(2, $TipoPerguntaEntity->getTpeStatus(),\PDO::PARAM_STR);
		$stmt->bindParam(3, $TipoPerguntaEntity->getTpeCodigo(),\PDO::PARAM_INT);		
			
		$stmt->execute();
			
		return $stmt;
			
	} catch (\PDOException $e) {
	throw new \PDOException($e->getMessage().' Valor: '.$PesquisaEntity->getPesData(), $e->getCode());
		}
	
		}
	
	
	public function getAll()
	{
		$query = ("SELECT * FROM $this->TABLENAME");
		
		try {
			
			$stmt = $this->conexao->prepare($query);
			
			$stmt->execute();
			
			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

			
		} catch (\PDOException $e) {
			throw new \PDOException($e->getMessage(), $e->getCode());
		}
		
	}
	
	public function getPesquisa($tpe_codigo)
	{
		$query = ("SELECT * FROM $this->TABLENAME
					WHERE $this->tpe_codigo = ?");
	
		try {
				
			$stmt = $this->conexao->prepare($query);
			
			$stmt->bindParam(1,$tpe_codigo,\PDO::PARAM_INT);
				
			$stmt->execute();
	
			return $stmt->fetch(\PDO::FETCH_ASSOC);
				
		} catch (\PDOException $e) {
			throw new \PDOException($e->getMessage(), $e->getCode());
		}
	
	}
	
	
}

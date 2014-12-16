<?php

namespace modulo\configuracao\app\model;

use Ramos\core\DataBaseConnect;

class PesquisaModel extends DataBaseConnect
{

	private $TABLENAME = 'tb_pesquisa';
	
	private $pes_codigo = 'pes_codigo';
	private $pes_nome = 'pes_nome';
	private $pes_data = 'pes_data';
	private $pes_status = 'pes_status';
	
	
	public function save(\modulo\configuracao\app\entity\PesquisaEntity $PesquisaEntity)
	{
		$query = ("INSERT INTO $this->TABLENAME 
					($this->pes_nome, $this->pes_data, $this->pes_status) 
					VALUES (?,?,?)");
		
		try {

			$stmt = $this->conexao->prepare($query);
			
			$stmt->bindParam(1, $PesquisaEntity->getPesNome(),\PDO::PARAM_STR);
			$stmt->bindParam(2, $PesquisaEntity->getPesData());
			$stmt->bindParam(3, $PesquisaEntity->getPesStatus(),\PDO::PARAM_STR);
			
			$stmt->execute();
			
			return $this->conexao->lastInsertId();
			
		} catch (\PDOException $e) {
			throw new \PDOException($e->getMessage().' Valor: '.$PesquisaEntity->getPesData(), $e->getCode());
		}
		
	}
	
	public function update(\modulo\configuracao\app\entity\PesquisaEntity $PesquisaEntity)
	{
		$query = ("UPDATE $this->TABLENAME
				SET $this->pes_nome = ?,
				    $this->pes_data = ?, 
					$this->pes_status = ?
				WHERE $this->pes_codigo = ?");
	
		try {
	
		$stmt = $this->conexao->prepare($query);
			
		$stmt->bindParam(1, $PesquisaEntity->getPesNome(),\PDO::PARAM_STR);
		$stmt->bindParam(2, $PesquisaEntity->getPesData(),\PDO::PARAM_STR);
		$stmt->bindParam(3, $PesquisaEntity->getPesStatus(),\PDO::PARAM_STR);
		$stmt->bindParam(4, $PesquisaEntity->getPesCodigo(),\PDO::PARAM_INT);		
			
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
	
	public function getPesquisa($pes_codigo)
	{
		$query = ("SELECT * FROM $this->TABLENAME
					WHERE $this->pes_codigo = ?");
	
		try {
				
			$stmt = $this->conexao->prepare($query);
			
			$stmt->bindParam(1,$pes_codigo,\PDO::PARAM_INT);
				
			$stmt->execute();
	
			return $stmt->fetch(\PDO::FETCH_ASSOC);
				
		} catch (\PDOException $e) {
			throw new \PDOException($e->getMessage(), $e->getCode());
		}
	
	}
	
	
}

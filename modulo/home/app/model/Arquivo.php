<?php

namespace modulo\home\app\Model;


class Arquivo 
{

	private $database;
	
	private $table = 'tabela';
	
	public function __construct($IDataBase)
	{
		$this->database = $IDataBase;
	}
	
	public function save(\modulo\home\app\Entity\Arquivo $arquivo)
	{

		$query = ("INSERT INTO $this->table ()");
		
		try {
			
		return $arquivo->getArqNumeracao();
			
			
		} catch (\Exception $e) {
			
			throw \PDOException($e->getMessage(),$e->getCode());
		}

		
	}
	

}

?>
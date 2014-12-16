<?php 
require_once '../../../bootstrap.php';

use Ramos\core\FormController;
use modulo\home\app\AcceptFormArquivo;

if($_POST){
	
	try {

		$AcceptForm = new AcceptFormArquivo();
		$AcceptForm->setPost($_POST)
				   ->receiverForm()
				   ->clearPost('cadastrar/arquivo')
				   ->router('../index.php');

		
	} catch (Exception $e) {
		
		$_SESSION['cadastrar/arquivo'] = $AcceptForm->getPost();
		
		foreach ($_SESSION['cadastrar/arquivo'] as $valores => $valor){
			
			echo $valores, '=>', $valor;
			
			if(isset($valores)){
				$_SESSION['cadastrar/arquivo'][$valores] = $valor;
			}else{
				$_SESSION['cadastrar/arquivo'][$valores] = '';
			}
			
		}
		
 		$form = new FormController();
		$form->setModulo($_SESSION['moduloTemp'])
		->setAction($_SESSION['actionTemp'])
		->setValue($_SESSION['valueTemp']);
		
		$_SESSION['erro'] = $e->getMessage();
		
		if(method_exists($e,'getMainMessage')){
			$_SESSION['erro'] = $e->getMainMessage();
		}
		
		if(method_exists($e,'findMessages')){
			$_SESSION['erros'] = $e->findMessages(
					array(
							'notEmpty' => 'O valor {{name}} não é valido',
							'email' => 'O valor {{name}} deve ser valor um e-mail valido'							
					)
			);
		}
		
		header('location: ../index.php');
	}
	
	
}



?>
<?php
require_once '../../../bootstrap.php';

use Ramos\core\FormController;
use modulo\configuracao\app\TipoPerguntaAcceptForm;

if($_POST){

	switch ($_SESSION['actionTemp'])
	{

		case 'cadastrar/tipopergunta' :
	
			try {
				
				$post = new TipoPerguntaAcceptForm();
				$post->setPost ( $_POST )->cadastrarTipoPergunta()->clearPost ( 'cadastrar/TipoPergunta' )->router ( '../ListarTipoPergunta.php' );
		
			} catch ( Exception $e ) {
				
				$_SESSION ['cadastrar/TipoPergunta'] = $_POST;
				
				$_SESSION ['erro'] = $e->getMessage ();
				
				if (method_exists ( $e, 'getMainMessage' )) {
					$_SESSION ['erro'] = $e->getMainMessage ();
					
					$_SESSION ['erros'] = $e->findMessages ( array (
							'string' => 'Este campo deve conter um Texto {{name}}',
							'email' => 'O valor {{name}} não é um e-mail valido',
							'notEmpty' => 'O valor {{input}} não pode ser vazio',
							'alnum' => 'o valor {{input}} tem ser alfanumerico' 
					) );
				}
				
				$form = new FormController ();
				$form->setModulo ( $_SESSION ['moduloTemp'] )->setAction ( $_SESSION ['actionTemp'] )->setValue ( $_SESSION ['valueTemp'] );
				
				header ( 'location: ' . $_SERVER ['HTTP_REFERER'] );
			}
		
		break;
		
		case 'alterar/tipopergunta' :
		
			try {
				
				$post = new ConfiguracaoAcceptInput ();
				$post->setPost($_POST)->alterarPesquisa()->clearPost('alterar/Pesquisa', 'Alterado com Sucesso!')->router( '../ListarPesquisa.php' );
				
			} catch ( Exception $e ) {
				
				$_SESSION ['erro'] = $e->getMessage ();
				
				if (method_exists ( $e, 'getMainMessage' )) {
					$_SESSION ['erro'] = $e->getMainMessage ();
					
					$_SESSION ['erros'] = $e->findMessages ( array (
							'string' => 'Este campo deve conter um Texto {{name}}',
							'email' => 'O valor {{name}} não é um e-mail valido',
							'notEmpty' => 'O valor {{input}} não pode ser vazio',
							'alnum' => 'o valor {{input}} tem ser alfanumerico' 
					) );
				}
				
				$form = new FormController ();
				$form->setModulo ( $_SESSION ['moduloTemp'] )->setAction ( $_SESSION ['actionTemp'] )->setValue ( $_SESSION ['valueTemp'] );
				
				header ( 'location: ' . $_SERVER ['HTTP_REFERER'] );
			}

	
	
		break;
		
		default:
			//session_destroy();
			
			echo 'Deu arro aqui BREAK '.print_r($_SESSION);
		break;

	}
	
}else{
	
	//session_destroy();
	echo 'Deu arro aqui IF ELSE';	
}
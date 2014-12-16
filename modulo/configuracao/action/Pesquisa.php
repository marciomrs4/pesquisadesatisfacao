<?php
require_once '../../../bootstrap.php';

use Ramos\core\FormController;
use modulo\configuracao\app\ConfiguracaoAcceptInput;




try {


	$post = new ConfiguracaoAcceptInput();
	$post->setPost($_POST)
		 ->cadastrarPesquisa()
		 ->clearPost('cadastrar/Pesquisa')
		 ->router('../Pesquisa.php');
	

	
} catch (Exception $e) {
	
	$_SESSION['erro'] = $e->getMessage();

if(method_exists($e,'getMainMessage')){
	$_SESSION['erro'] =	$e->getMainMessage();
	
	$_SESSION['erros'] = $e->findMessages(array(
			'string' => 'Este campo deve conter um Texto {{name}}',
			'email'  => 'O valor {{name}} não é um e-mail valido',
			'notEmpty' => 'O valor {{input}} não pode ser vazio',
			'alnum' => 'o valor {{input}} tem ser alfanumerico'
	 ));

}



$form = new FormController();
$form->setModulo($_SESSION['moduloTemp'])
	 ->setAction($_SESSION['actionTemp'])
	 ->setValue($_SESSION['valueTemp']);

header('location: ../index.php');

}
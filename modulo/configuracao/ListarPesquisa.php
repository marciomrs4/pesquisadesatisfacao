<?php
include_once '../../bootstrap.php';

include_once 'config.php';

include '../../componente/topo.php';
include '../../componente/menuprincipal.php';

include '../../modulo/configuracao/ModuloConfiguracao.php';

use Ramos\core\FormController;
use Ramos\core\Grid;
use modulo\configuracao\app\model\PesquisaModel;
use Ramos\core\Painel;
use Ramos\core\GridOption;
use Ramos\core\ActionController;


$DataGridPesquisa = new Grid();

$PesquisaModel = new PesquisaModel();

$DataGridPesquisa->setDados($PesquisaModel->getAll())
				 ->setCabecalho(array('','Codigo','Nome','Data','Status'))
				 ->addFunctionColumn(function($var){
				 	return date('d-m-Y',strtotime($var));
				 }, 2)->addFunctionColumn(function($var){
				 	return ($var == 1 ) ? 'Ativo' : 'Inativo';
				 },3)->addOption(GridOption::newOption('')->setIco('edit')
				 										  ->setName('Editar')
				 										  ->setUrl(ActionController::actionUrl()->setProjecName('pesquisadesatisfacao')
				 																			    ->setUrlModulo('configuracao')
				 																			    ->setUrlAction('alterar/Pesquisa')
				 										  										->setValue()
				 																			    ->getUrl()));
				 
$Painel = new Painel();
$Painel->addGrid($DataGridPesquisa)
		->setPainelColor()
		->setPainelTitle('Lista de Pesquisa')
		->show(isset($_SESSION['action']) ? false : true);
				 


$form = new FormController();
$form->setForm()
	 ->getForm();


include '../../componente/rodape.php';
?>
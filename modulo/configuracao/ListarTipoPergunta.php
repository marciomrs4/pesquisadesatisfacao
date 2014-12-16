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
use modulo\configuracao\app\model\TipoPerguntaModel;


$DataGridPesquisa = new Grid();

$TipoPerguntaModel = new TipoPerguntaModel();

$DataGridPesquisa->setDados($TipoPerguntaModel->getAll())
				 ->setCabecalho(array('Codigo','Nome','Status'))
				 ->addFunctionColumn(function($var){
				 	return ($var == 1 ) ? 'Ativo' : 'Inativo';
				 },3);
				 
$Painel = new Painel();
$Painel->addGrid($DataGridPesquisa)
		->setPainelColor()
		->setPainelTitle('Lista de Tipo de Pergunta')
		->show(isset($_SESSION['action']) ? false : true);
				 


$form = new FormController();
$form->setForm()
	 ->getForm();


include '../../componente/rodape.php';
?>
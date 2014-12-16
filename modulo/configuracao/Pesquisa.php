<?php
include_once '../../bootstrap.php';

include_once 'config.php';

include '../../componente/topo.php';
include '../../componente/menuprincipal.php';


include '../../modulo/configuracao/ModuloConfiguracao.php';


use Ramos\core\FormController;
use Ramos\core\Grid;


$DataGridPesquisa = new Grid();

$DataGridPesquisa->setDados($dados)
				 ->setCabecalho($cabecalho)
				 ->show();



$form = new FormController();
$form->setForm()
	 ->getForm();


include '../../componente/rodape.php';
?>
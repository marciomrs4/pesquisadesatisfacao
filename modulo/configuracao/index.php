<?php
use Ramos\core\FormController;


include_once '../../bootstrap.php';
include_once 'config.php';

include '../../componente/topo.php';
include '../../componente/menuprincipal.php';


include '../../modulo/configuracao/ModuloConfiguracao.php';


echo '<pre>';
print_r($_SESSION);
echo '</pre>';

$form = new FormController();
$form->setForm()
	 ->getForm();


include '../../componente/rodape.php';
?>
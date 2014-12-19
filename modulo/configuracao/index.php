<?php
/* use Ramos\core\FormController;
include_once '../../bootstrap.php';
include_once 'config.php';

include '../../componente/topo.php';
include '../../componente/menuprincipal.php';


include '../../modulo/configuracao/ModuloConfiguracao.php';
 */

$valores['valor'] = '<a href="#">teste w24</a> ';

//$filtros = array('valor' => FILTER_SANITIZE_ENCODED);

$valoresFiltrados = filter_var_array($valores,FILTER_SANITIZE_STRING);

echo '<pre>';
var_dump($valores);

var_dump($valoresFiltrados);

echo '</pre>';


/* $form = new FormController();
$form->setForm()
	 ->getForm();


include '../../componente/rodape.php'; */
?>
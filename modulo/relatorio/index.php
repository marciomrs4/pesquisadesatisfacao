<?php 

use modulo\home\app\GridHome;
use Ramos\core\FormController;

include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'/bootstrap.php';
include_once 'config.php';

include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'componente/topo.php';
include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'componente/menuprincipal.php';

include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'modulo/relatorio/ModuloRelatorio.php';


$form = new FormController();
$form->setForm('forms/cadastrar/Arquivo')->getForm();

include '../../componente/rodape.php';
?>
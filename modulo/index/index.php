<?php
include_once '../../bootstrap.php';

include_once '../../configGlobal.php';

use Ramos\core\FormController as Form;

$Controller = new Form();
$Controller->setForm('forms/login')->getForm();


?>
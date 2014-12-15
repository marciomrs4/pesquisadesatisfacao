<?php
session_start();

date_default_timezone_set('America/Sao_Paulo');


$configGlobal = array();

#Pasta do Projeto
$configGlobal['basepath'] = 'ZeroProject';

#Nome do Projeto
$configGlobal['projectName'] = 'Projeto Zero';
#Nome do Sistema
$configGlobal['systemName'] = '..:: Exemplo ::..';

#Itens do menu principal
$configGlobal['exemplo'] = 'exemplo';
$configGlobal['home'] = 'Home';
$configGlobal['administracao'] = 'Administração';

#Titulo do rodapé
$configGlobal['tituloRodape'] = '..:: Sistema Exemplo ::..';

?>
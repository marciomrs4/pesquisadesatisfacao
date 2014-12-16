<?php
session_start();

date_default_timezone_set('America/Sao_Paulo');


$configGlobal = array();

#Pasta do Projeto
$configGlobal['basepath'] = 'pesquisadesatisfacao';

#Nome do Projeto
$configGlobal['projectName'] = 'Menu Principal';
#Nome do Sistema
$configGlobal['systemName'] = '..:: Pesquisa de Satisfação ::..';

#Itens do menu principal
$configGlobal['relatorio'] = 'Relatórios';
$configGlobal['configuracao'] = 'Configurações';


#Titulo do rodap�
$configGlobal['tituloRodape'] = '..:: Tecnologia da Informação ::..';

?>
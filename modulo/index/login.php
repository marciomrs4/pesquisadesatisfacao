<?php
include_once '../../bootstrap.php';


$users = array('marcio','clay','wellington');

$existe = in_array($_POST['usuario'], $users);

if($existe){
	echo "<script>
			window.document.location.href = '../{$configGlobal['exemplo']}';		
		  </script>";

}else{
	echo 'Seu usuario esta incorreto!';
}

?>
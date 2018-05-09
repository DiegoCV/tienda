<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡¡Bienvenido al mundo del mañana!!  \\
include_once realpath('../../innerController/CategoriaController.php');

$list=CategoriaController::listAll();
$rta="";
foreach ($list as $obj => $Categoria) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Categoria->getidCATEGORIA()."</td>\n";
	$rta.="<td>".$Categoria->getDESCRIPCION()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!
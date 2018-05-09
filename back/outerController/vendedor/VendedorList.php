<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Era más fácil crear un framework que aprender a usar uno existente  \\
include_once realpath('../../innerController/VendedorController.php');

$list=VendedorController::listAll();
$rta="";
foreach ($list as $obj => $Vendedor) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Vendedor->getidVENDEDOR()."</td>\n";
	$rta.="<td>".$Vendedor->getTIENDA_idTIENDA()->getidTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!